import drawer from "./theme/drawer";
import testimonails from "./theme/testimonial-slider";
import buildSidebar from "./theme/buildSidebar";
import scrollTransition from './theme/scroll-transition';

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

    testimonails();
    drawer();
    buildSidebar();
    scrollTransition();


    /** Theme Atoms */
    // aMaxWidthIFrame();

    /** Theme Molecules */

    /** Theme Organisms */



  });
