if (typeof $ == 'undefined') {
  var $ = jQuery
  $(document).ready(function () {
    $('.slider').slick({
      autoplay: true,
      autoplaySpeed: 10000,
      dots: true,
      fade: true,
      arrows: true,
      arrowsPlacement: 'beforeSlides',
      prevArrow:
        '<button type="button" class="custom-prev-button">' +
        `<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 md:h-12 md:w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
    </svg>` +
        '  <span class="sr-only">Previous slide</span>' +
        '</button>',
      nextArrow:
        '<button type="button" class="custom-next-button">' +
        `<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 md:h-12 md:w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
    </svg>` +
        '  <span class="sr-only">Next slide</span>' +
        '</button>',
      pauseIcon: `<svg xmlns="http://www.w3.org/2000/svg" aria-label="Pause" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M10 9v6m4-6v6m7-3a9 9 0 11-18 0 9 9 0 0118 0z" />
    </svg>`,
      playIcon: `<svg xmlns="http://www.w3.org/2000/svg" aria-label="Play" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
      <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
    </svg>`,
    })
  })
}
