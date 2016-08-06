$(function() {


    var topoffset = 121;

//window height
    var wheight = $(window).height(); //get height of window using jquery

      $('.fullheight').css('height', wheight);

      $(window).resize(function() {
            var wheight =$(window).height(); //get height of window using jquery
            $('.fullheight').css('height', wheight);
      }); //on resize



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

    if (windowpos > $('#new').offset().top-1) {
      $('nav li a').removeClass('active');
      $('a[href$="#new"]').addClass('active');
       $("#toggle").removeClass('active');
      $('#overlay').removeClass('open');

    } //windowpos

    if (windowpos > $('#events').offset().top-1) {
      $('nav li a').removeClass('active');
      $('a[href$="#events"]').addClass('active');
       $("#toggle").removeClass('active');
      $('#overlay').removeClass('open');

    } //windowpos

    if (windowpos > $('#ministries').offset().top-1) {
      $('nav li a').removeClass('active');
      $('a[href$="#ministries"]').addClass('active');
       $("#toggle").removeClass('active');
      $('#overlay').removeClass('open');

    } //windowpos

    if (windowpos > $('#beliefs').offset().top-1) {
      $('nav li a').removeClass('active');
      $('a[href$="#beliefs"]').addClass('active');
       $("#toggle").removeClass('active');
      $('#overlay').removeClass('open');

    } //windowpos

    if (windowpos > $('#staff').offset().top-1) {
      $('nav li a').removeClass('active');
      $('a[href$="#staff"]').addClass('active');
       $("#toggle").removeClass('active');
      $('#overlay').removeClass('open');
    } //windowpos
    
    // if (windowpos > $('#giving').offset().top-1) {
    //   $('nav li a').removeClass('active');
    //   $('a[href$="#giving"]').addClass('active');
    // } //windowpos
  }); //window scroll


  //remove scroll down
  $(window).scroll(function() {
    var windowpos = $(window).scrollTop() + topoffset;
     $(".arrow").fadeOut(400);
   });


  //set up ScrollMagic
  var controller = new ScrollMagic({
    globalSceneOptions: {
      triggerHook: "onLeave"
    }
  });

  //pin the navigation
  var pin = new ScrollScene({
    triggerElement: '#nav',
    }).setPin('#nav').addTo(controller)
  }); //on load

// Hamburger Menu
$('#toggle').click(function() {
     $(this).toggleClass('active');
   $('#overlay').toggleClass('open');
  });
 
 if ('#toggle'.hasClass('open')){
  a.click(function() {
   $(this).removeClass('active');
   $('#overlay').removeClass('open');
  });
}
 
//  Vertical Tabs


// Accordion tabs
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
    };
}



