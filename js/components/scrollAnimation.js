import ScrollReveal from 'scrollreveal'

function initScrollAnimation() {
  ScrollReveal().reveal(document.querySelectorAll(".js-slide-bot"), {
    delay: 0,
    distance: "70px",
    duration: 400,
    origin: "bottom",
    reset: false,
    mobile: false,
    viewOffset: {
      bottom: 100,
      top: 100,
    },
  });

  ScrollReveal().reveal(document.querySelectorAll(".title"), {
    delay: 0,
    distance: "60px",
    duration: 700,
    origin: "bottom",
    reset: false,
    mobile: false,
    viewOffset: {
      bottom: 100,
      top: 100,
    },
  });

  ScrollReveal().reveal(document.querySelectorAll(".js-slide-opac"), {
    delay: 0,
    duration: 700,
    scale: 0.9,
    interval: 0,
    reset: false,
    mobile: false,
    opacity: 0,
    viewOffset: {
      bottom: 100,
      top: 100,
    },
  });

  ScrollReveal().reveal(document.querySelectorAll(".js-slide-right"), {
    delay: 0,
    distance: "100px",
    duration: 1000,
    origin: "right",
    reset: false,
    mobile: false,
    viewOffset: {
      bottom: 100,
      top: 100,
    },
  });

  ScrollReveal().reveal(document.querySelectorAll(".js-slide-left"), {
    delay: 0,
    distance: "100px",
    duration: 1000,
    origin: "left",
    reset: false,
    mobile: false,
    viewOffset: {
      bottom: 100,
      top: 100,
    },
  });

  ScrollReveal().reveal(document.querySelectorAll(".js-slide-interval"), {
    distance: "30px",
    duration: 400,
    useDelay: "always",
    origin: "bottom",
    interval: 100,
    reset: false,
    mobile: false,
    viewOffset: {
      bottom: 100,
      top: 100,
    },
  });

  ScrollReveal().reveal(document.querySelectorAll(".js-slide-spin"), {
    rotate: {
      z: -30
    },
    duration: 600,
    useDelay: "always",
    origin: "bottom",
    interval: 300,
    reset: false,
    mobile: false,
    viewOffset: {
      bottom: 100,
      top: 100,
    },
  });

  ScrollReveal().reveal(document.querySelectorAll(".js-slide-spinrev"), {
    rotate: {
      z: 30
    },
    duration: 800,
    useDelay: "always",
    origin: "bottom",
    interval: 300,
    reset: false,
    mobile: false,
    viewOffset: {
      bottom: 100,
      top: 100,
    },
  });
}

export default initScrollAnimation;
