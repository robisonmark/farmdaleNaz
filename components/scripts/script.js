$(function() {
  // Accordion tabs

  $('.picture')
  // tile mouse actions
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
      // add a photo container
      .append('<div class="photo"></div>')
      // some text just to show zoom level on current item in this example
      // .append('<div class="txt"><div class="x">'+ $(this).attr('data-scale') +'x</div>ZOOM ON<br>HOVER</div>')
      // set up a background image for each tile based on data-image attribute
      .children('.photo').css({'background-image': 'url('+ $(this).attr('data-image') +')'});
  })
  
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
    }
}

    var topoffset = 89;

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

    if (windowpos > $('#welcome').offset().top-1) {
      $('nav li a').removeClass('active');
      $('a[href$="#welcome"]').addClass('active');
    } //windowpos

    if (windowpos > $('#events').offset().top-1) {
      $('nav li a').removeClass('active');
      $('a[href$="#events"]').addClass('active');
    } //windowpos

    if (windowpos > $('#ministries').offset().top-1) {
      $('nav li a').removeClass('active');
      $('a[href$="#ministries"]').addClass('active');
    } //windowpos

    if (windowpos > $('#about').offset().top-1) {
      $('nav li a').removeClass('active');
      $('a[href$="#about"]').addClass('active');
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
     $(".arrow").fadeOut(400)
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
    }).setPin('#nav').addTo(controller);
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
    }
}




//close menu

  // function closeSubMenu(){
  //   $('.menu-item').removeClass('submenu-is-visible');
  // }

  // // Close menu on escape
  // $('body').on('click keyup', function(event) {
  //  if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
  //    if ($('body').hasClass('menu-open')) {
  //      $(this).removeClass('menu-open');
  //      $('#main-nav .menu-item-has-children').removeClass('submenu-is-visible');
  //      $('.menu-con').removeClass('submenu-is-visible');
  //    } else {
  //      $('body').addClass('menu-open');
  //    }
  //  }
  // });

  //Mutiple hero pictures not stories