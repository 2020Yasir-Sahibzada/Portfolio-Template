import 'bootstrap';
import $ from 'jquery';
import AOS from 'aos';
import Typed from 'typed.js';
import GLightbox from 'glightbox';
import imagesLoaded from 'imagesloaded';
import Isotope from 'isotope-layout';
import Swiper from 'swiper/bundle';
import PureCounter from '@srexi/purecounterjs';
import 'waypoints/lib/noframework.waypoints';

// // Initialize AOS
// AOS.init();

// // Initialize Typed.js
// document.addEventListener('DOMContentLoaded', () => {
//     const typedElement = document.querySelector('.typed');
//     if (typedElement) {
//         const typedItems = typedElement.getAttribute('data-typed-items').split(', ');
//         new Typed('.typed', {
//             strings: typedItems,
//             typeSpeed: 50,
//             backSpeed: 25,
//             backDelay: 1000,
//             startDelay: 500,
//             loop: true
//         });
//     }
// });

// // Initialize GLightbox
// const lightbox = GLightbox();

// // Initialize Swiper
// function initSwiper() {
//     document.querySelectorAll(".init-swiper").forEach(function(swiperElement) {
//         let configElement = swiperElement.querySelector(".swiper-config");
//         if (!configElement) {
//             console.error("No .swiper-config found for", swiperElement);
//             return;
//         }

//         let config = JSON.parse(configElement.innerHTML.trim());
//         console.log("Initializing Swiper with config:", config);

//         if (swiperElement.classList.contains("swiper-tab")) {
//             initSwiperWithCustomPagination(swiperElement, config);
//         } else {
//             new Swiper(swiperElement, config);
//         }
//     });
// }

// window.addEventListener("load", initSwiper);

// // Initialize Isotope
// const iso = new Isotope('.grid', {
//     itemSelector: '.grid-item',
//     layoutMode: 'fitRows'
// });

// // Initialize ImagesLoaded
// imagesLoaded('.container', function() {
//     // callback
// });

// // Initialize PureCounter
// document.addEventListener('DOMContentLoaded', () => {
//     new PureCounter();
// });

// // Initialize Waypoints (if available via npm or manually included)
// // new Waypoint({
// //     element: document.getElementById('some-element'),
// //     handler: function(direction) {
// //         console.log('Scrolled to waypoint!');
// //     }
// // });



/**
* Template Name: MyResume
* Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
* Updated: Jun 29 2024 with Bootstrap v5.3.3
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

(function() {
    "use strict";

    /**
     * Header toggle
     */
    const headerToggleBtn = document.querySelector('.header-toggle');

    function headerToggle() {
      document.querySelector('#header').classList.toggle('header-show');
      headerToggleBtn.classList.toggle('bi-list');
      headerToggleBtn.classList.toggle('bi-x');
    }
    headerToggleBtn.addEventListener('click', headerToggle);

    /**
     * Hide mobile nav on same-page/hash links
     */
    document.querySelectorAll('#navmenu a').forEach(navmenu => {
      navmenu.addEventListener('click', () => {
        if (document.querySelector('.header-show')) {
          headerToggle();
        }
      });

    });

    /**
     * Toggle mobile nav dropdowns
     */
    document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
      navmenu.addEventListener('click', function(e) {
        e.preventDefault();
        this.parentNode.classList.toggle('active');
        this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
        e.stopImmediatePropagation();
      });
    });

    /**
     * Preloader
     */
    const preloader = document.querySelector('#preloader');
    if (preloader) {
      window.addEventListener('load', () => {
        preloader.remove();
      });
    }

    /**
     * Scroll top button
     */
    let scrollTop = document.querySelector('.scroll-top');

    function toggleScrollTop() {
      if (scrollTop) {
        window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
      }
    }
    scrollTop.addEventListener('click', (e) => {
      e.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });

    window.addEventListener('load', toggleScrollTop);
    document.addEventListener('scroll', toggleScrollTop);

    /**
     * Animation on scroll function and init
     */
    function aosInit() {
      AOS.init({
        duration: 600,
        easing: 'ease-in-out',
        once: true,
        mirror: false
      });
    }
    window.addEventListener('load', aosInit);

    /**
     * Init typed.js
     */
    const selectTyped = document.querySelector('.typed');
    if (selectTyped) {
      let typed_strings = selectTyped.getAttribute('data-typed-items');
      typed_strings = typed_strings.split(',');
      new Typed('.typed', {
        strings: typed_strings,
        loop: true,
        typeSpeed: 100,
        backSpeed: 50,
        backDelay: 2000
      });
    }

    /**
     * Initiate Pure Counter
     */
    new PureCounter();

    /**
     * Animate the skills items on reveal
     */
    $(document).ready(function() {
        $('.skills-animation').each(function() {
            new Waypoint({
                element: this,
                offset: '80%',
                handler: function(direction) {
                    $(this.element).find('.progress .progress-bar').each(function() {
                        let value = $(this).attr('aria-valuenow');
                        if (value) {
                            $(this).css('width', value + '%');
                        } else {
                            console.warn('aria-valuenow attribute is missing or invalid for', this);
                        }
                    });
                    this.destroy(); // Destroy waypoint after animation to prevent re-triggering
                }
            });
        });
    });

    /**
     * Initiate glightbox
     */
    const glightbox = GLightbox({
      selector: '.glightbox'
    });

    /**
     * Init isotope layout and filters
     */
    document.querySelectorAll('.isotope-layout').forEach(function(isotopeItem) {
      let layout = isotopeItem.getAttribute('data-layout') ?? 'masonry';
      let filter = isotopeItem.getAttribute('data-default-filter') ?? '*';
      let sort = isotopeItem.getAttribute('data-sort') ?? 'original-order';

      let initIsotope;
      imagesLoaded(isotopeItem.querySelector('.isotope-container'), function() {
        initIsotope = new Isotope(isotopeItem.querySelector('.isotope-container'), {
          itemSelector: '.isotope-item',
          layoutMode: layout,
          filter: filter,
          sortBy: sort
        });
      });

      isotopeItem.querySelectorAll('.isotope-filters li').forEach(function(filters) {
        filters.addEventListener('click', function() {
          isotopeItem.querySelector('.isotope-filters .filter-active').classList.remove('filter-active');
          this.classList.add('filter-active');
          initIsotope.arrange({
            filter: this.getAttribute('data-filter')
          });
          if (typeof aosInit === 'function') {
            aosInit();
          }
        }, false);
      });

    });

    /**
     * Init swiper sliders
     */
    function initSwiper() {
      document.querySelectorAll(".init-swiper").forEach(function(swiperElement) {
        let config = JSON.parse(
          swiperElement.querySelector(".swiper-config").innerHTML.trim()
        );

        if (swiperElement.classList.contains("swiper-tab")) {
          initSwiperWithCustomPagination(swiperElement, config);
        } else {
          new Swiper(swiperElement, config);
        }
      });
    }

    window.addEventListener("load", initSwiper);

    /**
     * Correct scrolling position upon page load for URLs containing hash links.
     */
    window.addEventListener('load', function(e) {
      if (window.location.hash) {
        if (document.querySelector(window.location.hash)) {
          setTimeout(() => {
            let section = document.querySelector(window.location.hash);
            let scrollMarginTop = getComputedStyle(section).scrollMarginTop;
            window.scrollTo({
              top: section.offsetTop - parseInt(scrollMarginTop),
              behavior: 'smooth'
            });
          }, 100);
        }
      }
    });

    /**
     * Navmenu Scrollspy
     */
    let navmenulinks = document.querySelectorAll('.navmenu a');

    function navmenuScrollspy() {
      navmenulinks.forEach(navmenulink => {
        if (!navmenulink.hash) return;
        let section = document.querySelector(navmenulink.hash);
        if (!section) return;
        let position = window.scrollY + 200;
        if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
          document.querySelectorAll('.navmenu a.active').forEach(link => link.classList.remove('active'));
          navmenulink.classList.add('active');
        } else {
          navmenulink.classList.remove('active');
        }
      })
    }
    window.addEventListener('load', navmenuScrollspy);
    document.addEventListener('scroll', navmenuScrollspy);

  })();
