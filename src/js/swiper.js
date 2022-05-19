console.log("helloswiper");
  
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 2,
    loop: true,
    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 320px
      10: {
        slidesPerView: 1,
        spaceBetween: 1,
      },


      // when window width is >= 480px
      768: {
        slidesPerView: 2,
        spaceBetween: 1,
      },
      // when window width is >= 640px
      1025: {
        slidesPerView: 2,
        spaceBetween: 1,
      }
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

  });

  console.log("helloswiper1");


  var swiper = new Swiper(".nakedSwiper", {
    slidesPerView: 2,
    loop: true,
    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 320px
      10: {
        slidesPerView: 1,
        spaceBetween: 1,
      },


      // when window width is >= 480px
      768: {
        slidesPerView: 2,
        spaceBetween: 1,
      },
      // when window width is >= 640px
      1025: {
        slidesPerView: 2,
        spaceBetween: 1,
      }
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

  });


  console.log("helloswiper2");