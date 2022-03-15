import testimonials from "./theme/testimonial-slider";
import accordion from "./theme/accordion";
import buildSidebar from "./theme/buildSidebar";
import drawer from "./theme/drawer";
import scrollTransition from './theme/scroll-transition';
import alertBar from './theme/alert-bar';

document.addEventListener("DOMContentLoaded", function() {
    /** Address HTML & Body no-js Class */
    (function() {
      /** Remove */
      // document.documentElement.classList.remove('no-js');
      // document.body.classList.remove('no-js');

      /** Replace */
      document.documentElement.className = document.documentElement.className.replace(
        "no-js",
        "js"
      );
      document.body.className = document.body.className.replace("no-js", "js");
    })();

    /** Config */
    // faviconBadge();

    /** Theme */
    // fancybox();

    testimonials();
    drawer();
    buildSidebar();
    accordion();
    scrollTransition();
    alertBar();


    /** Theme Atoms */
    // aMaxWidthIFrame();

    /** Theme Molecules */

    /** Theme Organisms */



  });
