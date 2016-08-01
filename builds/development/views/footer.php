        <div id="baseline">
            <div id="skyline_outer">
                <article id="social">
                    <ul class="group">
                        <li>
                            <a href="https://twitter.com/FarmdaleNaz"><!-- data-icon="&#xe601;"-->
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/farmdalenazarene/"><!-- data-icon="&#xe600;"-->
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                           
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/UCuFnmhskS_qS74pZXJMRh5A"> <!-- data-icon="&#xf16a;"-->
                            <i class="fa fa-youtube-play" aria-hidden="true"></i>

                            </a>
                        </li>
                    </ul>
                </article><!--social -->
                <article id="skyline">  
                    <span> 	
                        <img src="images/skyline.png" /> 
                    </span> 
                </article>  <!-- skyline -->
         </div><!-- skyline outer --> 
        </div><!-- baseline -->
    </main><!-- Body -->
    <footer><!-- Footer -->
        <article class="legal">
            <section> 
                <br />
                <div id="legal">
                    Copyright &copy; 2014 Farmdale Church of the Nazarene
                </div><!-- Legal -->
                <div id="foot_add">
                    6501 Vandre Avenue, Louisville, Kentucky 40218
                </div><!-- Address -->
            </section>
        </article> <!-- Legal -->
    </footer><!-- Footer -->
    <a id="sp-totop" class="backtotop hidden-top" href="#">
        <i class="fa fa-angle-up"></i>
    </a>
    <script>
       	// $(".backtotop").addClass("hidden-top");
		$(window).scroll(function () {
            if ($(this).scrollTop() <= 600) {
                $(".backtotop").addClass("hidden-top");
            } else {
                $(".backtotop").removeClass("hidden-top");
		    }
	    });
    	$('.backtotop').click(function () {
            $('body,html').animate({
                scrollTop:0
			}, 1200);
		return false;
	    });
    </script>
        <script src="js/script.js"></script><!-- js -->
        <script>
          function initMap() {
            var mapDiv = document.getElementById('map');
            var map = new google.maps.Map(mapDiv, {
              center: {lat: 38.1358216, lng: -85.6394093},
              zoom: 15,
            });
          }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
            async defer></script>
    </body>
 </html>
