import 'focus-visible';
import 'lazysizes';
// import sal from 'sal.js'
import prefersReducedMotion from './util/prefersReducedMotion';
import nav from './util/nav';

window.addEventListener('DOMContentLoaded', () => {
  nav();
});

// window.addEventListener('DOMContentLoaded', () => {
//     /**
//      * Initialize sal
//      */
//     sal({
//       disabled: prefersReducedMotion(),
//       selector: '.animate',
//     });

//     /**
//      * Intersection Observer
//      */
//     if (!prefersReducedMotion()) {
//       const accentObserver = new IntersectionObserver((entries) => {
//         entries.forEach(entry => {
//           if (entry.isIntersecting) {
//             entry.target.classList.add('in-viewport');
//             accentObserver.unobserve(entry.target);
//           }
//         });
//       });

//     }
// });