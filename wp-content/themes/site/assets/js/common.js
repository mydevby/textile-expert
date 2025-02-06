$(function(){
	$('.menubg').click(function() {
		$('.header .menu-button').removeClass('active');
		$('.menubg').fadeOut();
		$('.header ul').removeClass('opened');
	});
	$('.header .menu-button').click(function() {
		$('.header .menu-button').addClass('active');
		$('.menubg').fadeIn();
		$('.header ul').addClass('opened');
	});
	$('.tasks-block .list .item .name').click(function() {
		$(this).parent().toggleClass('active');
		$(this).next('.text').slideToggle();
	});
	var swiper = new Swiper(".swiper", {
	  slidesPerView: "auto",
	  loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
});