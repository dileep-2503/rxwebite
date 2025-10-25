import GLightbox from 'glightbox'
import '../glightbox/dist/css/glightbox.min.css'

export default defineNuxtPlugin(() => {
  // Initialize GLightbox
  const glightbox = GLightbox({
    selector: '.glightbox'
  })
  
  return {
    provide: {
      glightbox
    }
  }
})