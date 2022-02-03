/* jslint esversion: 6 */
/**
 * Scroll Transition
 *
 * Animate local scrolling.
 *
 * @author Dylan James Wagner
 *
 * @TODO consider settings.offset element(s) as offset default. parseInt($('#header').css('height'))
 */
const $ = window.jQuery;
const s = {
  duration:          500,
  offset:            16, // Default 0 // Account for fixed header height, example: parseInt($('.header').css('height'))
  offsetMinWidth:    0, // Default 0 // Account for fixed header breakpoint, example: 1140
  offsetDisable:     false, // Default false, [false, up, down] // Disable when using a fixed header that autohides
  offsetExcludeHash: [
    // '#hash,'
  ]
};

function init() {

  $(window).on('load',function() {

    /** scroll to target on load with hash */
    if (window.location.hash) {
      scroll(window.location.hash, 0); // no duration
      removeHash();
    }
  });

  events();
}

function events() {

  /** hash */
  $('a[href^="#"], a[href$="' + window.location.host + window.location.pathname + window.location.search + '#' + window.location.hash.substring(1) + '"]')
    .on('click', function(event) {
      event.preventDefault();
      scroll(this.hash);
    });
}

function scroll(hash, duration = s.duration) {

  if (hash.length !== 0) {
    const $target = $(hash);
    let offset = s.offset;
    let position = 0;

    if ($target.length) {
      let windowOffsetTop = $(window).scrollTop();
      let targetOffsetTop = Math.floor($target.offset().top);

      if (window.innerWidth < s.offsetMinWidth) {
        offset = 0;
      }

      s.offsetExcludeHash.forEach(function(hash) {

        if (hash.includes(hash)) {
          offset = 0;
        }
      });

      if ($('body.admin-bar').length || $('body.body-admin-bar').length) { // support namespaced body_class
        // offset = offset + parseInt($('#wpadminbar').css('height'))
        if (window.innerWidth < 783) { // WordPress Desktop breakpoint
          offset = offset + 46;
        }
        else {
          offset = offset + 32;
        }
      }

      /** adjust offset based on scroll direction */
      if (s.offsetDisable === 'up' && targetOffsetTop <= windowOffsetTop) {
        position = targetOffsetTop;
      }
      else if (s.offsetDisable === 'down' && targetOffsetTop >= windowOffsetTop) {
        position = targetOffsetTop;
      }
      else {
        // console.log('offset', offset);
        position = targetOffsetTop - (offset - 1); // minus 1 to adjust for 0 based scrollTop
      }

      $('html, body').animate({
        scrollTop : position,
      }, duration);
    }
  }
}

/**
 * Remove Hash
 *
 * @link https://stackoverflow.com/questions/1397329/how-to-remove-the-hash-from-window-location-url-with-javascript-without-page-r/5298684#5298684
 */
function removeHash() {
  history.pushState('', document.title, window.location.pathname + window.location.search);
}

export {init as default, scroll};
