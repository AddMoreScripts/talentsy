function initAddictSwipers(Swiper) {
  new Swiper('.js-closlider1 .swiper', {
    autoHeight: false,
    loop: false,
    spaceBetween: 20,
    slidesPerView: 'auto',
    navigation: {
      prevEl: ".js-closlider1 .closlictrlbutt--prev",
      nextEl: ".js-closlider1 .closlictrlbutt--next",
    },
    pagination: {
      el: ".js-closlider1 .closlictrl__pag",
      type: "fraction",
    },
    breakpoints: {
      1300: {
        spaceBetween: 40,
        slidesPerView: 3,
      },
    },
  });

  new Swiper('.js-closlider2 .swiper', {
    autoHeight: false,
    loop: false,
    spaceBetween: 20,
    slidesPerView: 'auto',
    lazyPreloadPrevNext: 1,
    navigation: {
      prevEl: ".js-closlider2 .closlictrlbutt--prev",
      nextEl: ".js-closlider2 .closlictrlbutt--next",
    },
    pagination: {
      el: ".js-closlider2 .closlictrl__pag",
      type: "fraction",
    },
    breakpoints: {
      992: {
        spaceBetween: 20,
        slidesPerView: 3,
      },
      1199: {
        slidesPerView: 3,
        spaceBetween: 40,
      },
    },
  });

  new Swiper('.js-clo-reviews .swiper', {
    autoHeight: false,
    loop: false,
    spaceBetween: 20,
    slidesPerView: 'auto',
    navigation: {
      prevEl: ".js-clo-reviews .closlictrlbutt--prev",
      nextEl: ".js-clo-reviews .closlictrlbutt--next",
    },
    pagination: {
      el: ".js-clo-reviews .closlictrl__pag",
      type: "fraction",
    },
    breakpoints: {
      992: {
        spaceBetween: 20,
        slidesPerView: 4,
      },
      1199: {
        spaceBetween: 40,
        slidesPerView: 4,
      },
    },
  });
}
