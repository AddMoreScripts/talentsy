import Swiper from "swiper/bundle";
import "swiper/css/bundle";

export const initSliders = () => {
  //слайдер отзывов
  new Swiper(".js-review-slider .swiper", {
    loop: false,
    spaceBetween: 10,
    slidesPerView: "auto",
    navigation: {
      prevEl: ".js-review-slider .ctrl--prev",
      nextEl: ".js-review-slider .ctrl--next",
    },
    pagination: false,
    breakpoints: {
      767: {
        slidesPerView: 3,
      },
      1199: {
        spaceBetween: 30,
        slidesPerView: 5,
      },
      1600: {
        spaceBetween: 30,
        slidesPerView: 6,
      },
    },
  });

  const teamslider = new Swiper(".js-team-slider", {
    loop: false,
    effect: window.innerWidth > 992 ? "fade" : "slide",
    fadeEffect: {
      crossFade: true,
    },
    spaceBetween: 15,
    slidesPerView: "auto",
    navigation: false,
    pagination: false,
    autoHeight: false,
    lazy: true,
    lazyPreloadPrevNext: 2,
    breakpoints: {
      992: {
        slidesPerView: 1,
        autoHeight: false,
        spaceBetween: 0,
      },
    },
  });

  const diplom = new Swiper(".js-diplomblock-slider", {
    loop: false,
    spaceBetween: 15,
    slidesPerView: 1,
    navigation: {
      prevEl: ".js-diplomblock-slider .ctrl--prev",
      nextEl: ".js-diplomblock-slider .ctrl--next",
    },
  });

  const teamblock = document.querySelector(".teamblock");
  if (teamblock) {
    teamblock.addEventListener("mouseover", (e) => {
      const nameLink = e.target.closest(".teamblock__navlink[data-slide]");
      if (!nameLink) return;
      e.preventDefault();
      teamslider.slideTo(parseInt(nameLink.dataset.slide));
    });
    teamblock.addEventListener("click", (e) => {
      const nameLink = e.target.closest(".teamblock__navlink[data-slide]");
      if (!nameLink) return;
      e.preventDefault();
    });
  }

  //Главная стр.
  new Swiper(".js-front-cat .swiper", {
    loop: false,
    spaceBetween: 20,
    slidesPerView: "auto",
    navigation: false,
    pagination: false,
    autoHeight: false,
    navigation: {
      prevEl: ".js-front-cat .ctrl--prev",
      nextEl: ".js-front-cat .ctrl--next",
    },
    breakpoints: {
      1200: {
        slidesPerView: 3,
      },
    },
    lazy: true,
    lazyPreloadPrevNext: 2,
  });

  //блог - похожие статьи
  new Swiper(".js-relations-posts .swiper", {
    loop: false,
    spaceBetween: 20,
    slidesPerView: 'auto',
    navigation: {
      prevEl: ".js-relations-posts .ctrl--prev",
      nextEl: ".js-relations-posts .ctrl--next",
    },
    pagination: false,
    breakpoints: {
      767: {
        slidesPerView: 2,
      },
      1199: {
        spaceBetween: 30,
        slidesPerView: 3,
      },
    },
  });

  //блог - слайдер профессий
  new Swiper('.js-blog-footer .swiper', {
    loop: true,
    spaceBetween: 20,
    slidesPerView: 'auto',
    navigation: {
      prevEl: ".js-blog-footer .ctrl--prev",
      nextEl: ".js-blog-footer .ctrl--next",
    },
    pagination: {
      type: 'custom',
      el: ".js-blog-footer .blogproffslider__pag",
      renderCustom: (sw, curr, total) => {
        const proc = curr * 100 / total;
        return `<span>${(parseInt(curr) < 10) ? '0': ''}${curr}</span><span class="blogproffslider__scroll"><i style="width:${proc}%"></i></span><span>${total}</span>`
      }
    },
    breakpoints: {
      1199: {
        spaceBetween: 30,
        slidesPerView: 3,
      },
      1300: {
        spaceBetween: 30,
        slidesPerView: 4,
      },
    },
  });


  //ЗОЖ слайдер 1
  new Swiper('.nutri18__swiper', {
    loop: false,
    spaceBetween: 20,
    slidesPerView: 'auto',
    navigation: false,
    pagination: false,
    breakpoints: {
      992: {
        spaceBetween: 40,
      },
    },
  });
};
