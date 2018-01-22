var windowWidth = $(window).width();
if (windowWidth >= 768) {
  var imgSource = $('.parallax-window').data('image-src');
  console.log('imgSource: ' + imgSource);
  $('.parallax-window').parallax({imageSrc: imgSource});
}


$( document ).ready(function() {
  $('.clock').countdown('2017/06/17', function(event) {
	   $(this).html(event.strftime('Nog <span>%D</span> Dagen Tot'));
  });
});



function swiperInit (){

  var windowWidth = $(window).width();
  if (windowWidth <= 768) {
    var mySwiper = new Swiper('.swiper-container.swiper-container--mobile-only', {
        speed: 400,
        pagination: '.swiper-pagination',
        paginationClickable: true
    });
  }

  var normalSwiper = new Swiper('.swiper-container.swiper-container--normal', {
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    pagination: '.swiper-pagination',
  });

  var articleSwiper = new Swiper('.swiper-container.swiper-container--article', {
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    pagination: '.swiper-pagination',
    paginationType: 'fraction'
  });

}

swiperInit();

