function Menu(){
  var menuBtn = $('.top-navigation .btn-menu');
  var mobileMenu = $('.top-navigation nav');

  menuBtn.click(function() {
    mobileMenu.toggleClass('open');
    menuBtn.toggleClass('close');

    if (mobileMenu.attr('class') == 'open'){
      mobileMenu.on('touchmove', function(event) {
        event.preventDefault();
      });
    }

  });

}

Menu();
