<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        
        // Check that data was sent to the mailer.
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            http_response_code(400);
            echo "Please make sure to enter the correct email";
            exit;
        }

        // Set the recipient email address.
        $recipient = "dileep@rxsquare.in";

        // Set the email subject.
        //$subject = "$email Reach out";

        // Build the email content.
        //$email_content = "Email: $email, is seeking to reach out to the KS group.\n";

        // Build the email headers.
        $email_headers = "From: $name <$email>";

        // Send the email.
        if (mail($recipient, $subject, $message, $email_headers)) {
            http_response_code(200);
            echo json_encode(["message" => "Thank you! Your email has been sent."]);
        } else {
            http_response_code(500);
            echo json_encode(["message" => "Oops! Something went wrong and we couldn't send your message."]);
        }
    } else {
        http_response_code(403);
        echo json_encode(["message" => "There was a problem with your submission, please try again."]);
    }
?>
