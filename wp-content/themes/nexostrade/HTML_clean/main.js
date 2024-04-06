const splide = new Splide('.splide', {
    type   : 'loop',
    perPage: 8,
    arrows: false,
    pagination: false,
    autoScroll: {
      speed: 1,
      rewind: true,
      pauseOnHover: false,
      pauseOnFocus: false,
    },
    breakpoints: {
      1800: {
        perPage: 7,
      },
      1600: {
        perPage: 6,
      },
      1360: {
        perPage: 5,
      },
      1140: {
        perPage: 4,
      },
      904: {
        perPage: 3,
      },
      767: {
        perPage: 2,
      },
      400: {
        perPage: 2,
      }
    }
    
});


splide.mount(window.splide.Extensions);