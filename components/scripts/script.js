$(function() {

    var topoffset = 40;

//window height
    var wheight = $(window).height(); //get height of window using jquery

      $('.fullheight').css('height', wheight);

      $(window).resize(function() {
            var wheight =$(window).height(); //get height of window using jquery
            $('.fullheight').css('height', wheight);
      }) //on resize



  var isTouch = 'ontouchstart' in document.documentElement;

// Animated Scrolling
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top-topoffset
        }, 1000);
        return false;
      } // target.length
    } //location hostname
  }); //on click

  //highlight navigation
  $(window).scroll(function() {
    var windowpos = $(window).scrollTop() + topoffset;
    $('nav li a').removeClass('active');

    if (windowpos > $('#welcome').offset().top) {
      $('nav li a').removeClass('active');
      $('a[href$="#welcome"]').addClass('active');
    } //windowpos

    if (windowpos > $('#events').offset().top) {
      $('nav li a').removeClass('active');
      $('a[href$="#events"]').addClass('active');
    } //windowpos

    if (windowpos > $('#ministries').offset().top) {
      $('nav li a').removeClass('active');
      $('a[href$="#ministries"]').addClass('active');
    } //windowpos

    if (windowpos > $('#about').offset().top) {
      $('nav li a').removeClass('active');
      $('a[href$="#about"]').addClass('active');
    } //windowpos

    if (windowpos > $('#staff').offset().top) {
      $('nav li a').removeClass('active');
      $('a[href$="#staff"]').addClass('active');
    } //windowpos
    
    if (windowpos > $('#giving').offset().top) {
      $('nav li a').removeClass('active');
      $('a[href$="#giving"]').addClass('active');
    } //windowpos
  }); //window scroll




  //set up ScrollMagic
  var controller = new ScrollMagic({
    globalSceneOptions: {
      triggerHook: "onLeave"
    }
  });

  //pin the navigation
  var pin = new ScrollScene({
    triggerElement: '#nav',
    }).setPin('#nav').addTo(controller);
  }); //on load

// Hamburger Menu
$('#toggle').click(function() {
   $(this).toggleClass('active');
   $('#overlay').toggleClass('open');
  });