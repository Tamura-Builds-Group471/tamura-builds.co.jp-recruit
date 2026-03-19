const swiper = new Swiper('.top-member-slider .swiper', {
  loop: true,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },
  speed: 800,
  slidesPerView: 3.6,
  spaceBetween: 24,
  centeredSlides: true, // ← true にする
  navigation: {
    nextEl: '.top-member-slider .swiper-button-next',
    prevEl: '.top-member-slider .swiper-button-prev',
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
      centeredSlides: true // SPも中央起点に
    },
    768: {
      slidesPerView: 3.6,
      centeredSlides: true
    }
  },
  on: {
    init: function () {
      const activeIndex = this.activeIndex;
      this.slides.forEach((slide, index) => {
        slide.classList.remove('even_slide');
        if ((index - activeIndex + this.slides.length) % 2 === 0) {
          slide.classList.add('even_slide');
        }
      });
    },
    slideChangeTransitionStart: function () {
      const activeIndex = this.activeIndex;
      this.slides.forEach((slide, index) => {
        slide.classList.remove('even_slide');
        if ((index - activeIndex + this.slides.length) % 2 === 0) {
          slide.classList.add('even_slide');
        }
      });
    }
  }
});
