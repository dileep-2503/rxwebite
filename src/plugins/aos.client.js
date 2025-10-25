import AOS from 'aos'
import '../../node_modules/aos/dist/aos.css'

export default defineNuxtPlugin((nuxtApp) => {
  nuxtApp.hook('app:mounted', () => {
    import('aos').then((AOS) => {
      AOS.default.init({
        duration: 600,
        easing: 'ease-in-out',
        once: true,
        mirror: false
      });
    });
  });
});