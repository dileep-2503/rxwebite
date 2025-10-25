<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

// Check if the request is POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $job_position = $_POST['job_position'];
    $resume = $_FILES['resume'];

    // Validate input
    if (empty($name) || empty($email) || empty($phone) || empty($job_position) || empty($resume)) {
        echo json_encode(['success' => false, 'error' => 'All fields are required.']);
        exit;
    }

    // Ensure the uploads directory exists
    $uploadDir = 'uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Generate a unique resume filename
    $resumeName = time() . "_" . preg_replace("/[^a-zA-Z0-9.]/", "_", basename($resume['name']));
    $uploadFile = $uploadDir . $resumeName;

    // Move uploaded file to the uploads directory
    if (move_uploaded_file($resume['tmp_name'], $uploadFile)) {
        // Email settings
        $to = "dileep@rxsquare.in"; // Change this to your email
        $subject = "New Job Application from $name";
        $message = "Name: $name\nEmail: $email\nPhone: $phone\nPosition: $job_position\nResume: " . $_SERVER['HTTP_HOST'] . "/php/$uploadFile";
        $headers = "From: $email\r\n";

        // Send email
        if (mail($to, $subject, $message, $headers)) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'error' => 'Failed to send email.']);
        }
    } else {
        echo json_encode(['success' => false, 'error' => 'Failed to upload resume.']);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid request method.']);
}
?>


==============================================================================================

<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");
header('Content-Type: application/json');

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the request is POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    try {
        // Common fields for both job and internship
        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $phone = $_POST['phone'] ?? '';
        $job_position = $_POST['job_position'] ?? '';
        $resume = $_FILES['resume'] ?? null;

        // Internship-specific fields
        $qualification = $_POST['qualification'] ?? null;
        $college = $_POST['college'] ?? null;
        $college_location = $_POST['college_location'] ?? null;

        // Validate common required fields
        if (empty($name) || empty($email) || empty($phone) || empty($job_position) || empty($resume)) {
            throw new Exception('All required fields are missing.');
        }

        // Additional validation for internship applications
        if (stripos($job_position, 'internship') !== false) {
            if (empty($qualification) || empty($college) || empty($college_location)) {
                throw new Exception('For internship, qualification, college and location are required.');
            }
        }

        // Ensure the uploads directory exists
        $uploadDir = 'uploads/';
        if (!is_dir($uploadDir) && !mkdir($uploadDir, 0777, true)) {
            throw new Exception('Failed to create upload directory.');
        }

        // Generate a unique resume filename
        $resumeName = time() . "_" . preg_replace("/[^a-zA-Z0-9.]/", "_", basename($resume['name']));
        $uploadFile = $uploadDir . $resumeName;

        // Move uploaded file
        if (!move_uploaded_file($resume['tmp_name'], $uploadFile)) {
            throw new Exception('Failed to upload resume.');
        }

        // Email settings
        $to = "dileep@rxsquare.in";
        $subject = "New Application for $job_position from $name";
        $headers = [
            'From' => $email,
            'Reply-To' => $email,
            'X-Mailer' => 'PHP/' . phpversion(),
            'MIME-Version' => '1.0',
            'Content-type' => 'text/plain; charset=utf-8'
        ];

        // Build headers string
        $headersString = '';
        foreach ($headers as $key => $value) {
            $headersString .= "$key: $value\r\n";
        }

        // Build email message
        $message = "Application Details:\n\n";
        $message .= "Name: $name\n";
        $message .= "Email: $email\n";
        $message .= "Phone: $phone\n";
        $message .= "Position: $job_position\n";
        
        if ($qualification !== null) {
            $message .= "\nInternship Details:\n";
            $message .= "Qualification: $qualification\n";
            $message .= "College: $college\n";
            $message .= "College Location: $college_location\n";
        }
        
        $message .= "\nResume: http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/$uploadFile";

        // Send email
        if (!mail($to, $subject, $message, $headersString)) {
            throw new Exception('Failed to send email. Mail function returned false.');
        }

        echo json_encode(['success' => true, 'message' => 'Application submitted successfully!']);
        
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'error' => $e->getMessage()]);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid request method.']);
}
?>