$(function(){
    var swiper2 = new Swiper('.swiper-container', {
        slidesPerView: 2,
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        visibilityFullFit: true,
		breakpoints: {
   
    0: {
      slidesPerView: 1,
      spaceBetween: 30
    },
	767: {
      slidesPerView: 2,
      spaceBetween: 30
    }
			
		}
    });
	

    var swiper3 = new Swiper(".swiper-preview", {
        slidesPerView: 3, 
        spaceBetween: 10,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
			breakpoints: {
   
    0: {
      slidesPerView: 1,
      spaceBetween: 30
    },
	450: {
      slidesPerView: 2,
      spaceBetween: 30
    },
	767: {
      slidesPerView: 3,
      spaceBetween: 15
    }
			
		}
    });
});