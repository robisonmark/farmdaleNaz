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
    } //windowpos

    if (windowpos > $('#events').offset().top-1) {
      $('nav li a').removeClass('active');
      $('a[href$="#events"]').addClass('active');
    } //windowpos

    if (windowpos > $('#ministries').offset().top-1) {
      $('nav li a').removeClass('active');
      $('a[href$="#ministries"]').addClass('active');
    } //windowpos

    if (windowpos > $('#beliefs').offset().top-1) {
      $('nav li a').removeClass('active');
      $('a[href$="#beliefs"]').addClass('active');
    } //windowpos

    if (windowpos > $('#staff').offset().top-1) {
      $('nav li a').removeClass('active');
      $('a[href$="#staff"]').addClass('active');
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




  $('.picture')

  .on('mouseover', function(){
    $(this).children('.photo').css({'transform': 'scale('+ $(this).attr('data-scale') +')'});
  })
  .on('mouseout', function(){
    $(this).children('.photo').css({'transform': 'scale(1)'});
  })
  .on('mousemove', function(e){
    $(this).children('.photo').css({'transform-origin': ((e.pageX - $(this).offset().left) / $(this).width()) * 100 + '% ' + ((e.pageY - $(this).offset().top) / $(this).height()) * 100 +'%'});
  })
  // tiles set up
  .each(function(){
    $(this)
      .append('<div class="photo"></div>')
      .children('.photo').css({'background-image': 'url('+ $(this).attr('data-image') +')'});
  });
  

    twttr.widgets.createTimeline({
      sourceType: "profile",
      screenName: "farmdalenaz"
    }, document.getElementById("twitter-news"));

window.onload = function () {
    var acc = document.getElementsByClassName( "accordion" );

    for ( var j = 0; j < acc.length; j++ ) {
        acc[j].onclick = function () {
            this.classList.toggle( "active" );
            this.nextElementSibling.classList.toggle( "show" );
        }
    }
}

  }); //on load