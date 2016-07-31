       <div id="baseline">
            <div id="skyline_outer">
                <article id="social">
                    <ul class="group">
                        <li>
                            <a href="https://twitter.com/FarmdaleNaz"> <!-- data-icon="&#xe601;"-->
                            <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
                            </a>
                        </li><li>
                            <a href="https://www.facebook.com/farmdalenazarene/"> <!-- data-icon="&#xe600;" -->
                             <i class="fa fa-facebook fa-2x" aria-hidden="true"></i>   
                            </a>
                        </li><li>
                            <a href="https://www.youtube.com/channel/UCuFnmhskS_qS74pZXJMRh5A"> <!-- data-icon="&#xe602;" -->
                             <i class="fa fa-youtube-play fa-2x" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </article><!--social -->
                <article id="skyline">  
                    <span> 	
                        <img src="./images/skyline_gray_shadow.png" /> 
                    </span> 
                </article>  <!-- skyline -->
         </div><!-- skyline outer --> 
        </div><!-- baseline -->

    </main><!-- Body -->
    <footer><!-- Footer -->
        <article class="legal">
            <div class="servicetimes">
				<h4 class="title">Service Times</h4>
				
				<div class="weekly">
                    <div class="morning">Sunday Morning:</div><div class="morning"> Small Groups 9:30am 
                        <br /> Worship Service 10:30am</div>
                        <br />------------------------------------
                        <br /><div>Evening:</div><div> 1st - Sabbath
                        <br />2nd - Prayer 6:30pm
                        <br />3rd - Application
                        <br />4th - ?
                        <br />5th - Special</div>
                    </p>				
				</div>
                </div>
            <div class="address">
			<br>
				  <h4 class="title">Farmdale Church of the Nazarene</h4>
				  <address>
				  6501 Vandre Ave.<br>
				  Louisville, KY 40228<br>
				  <abbr title="Phone">P:</abbr> (502) 969-3214
				  </address>
			</div>
            <section> 
                <br />
                <!--<div id="legal">
                    Copyright &copy; 2014 Farmdale Church of the Nazarene
                </div><!-- Legal --
                <div id="foot_add">
                    6501 Vandre Avenue, Louisville, Kentucky 40218
                </div><!-- Address -->
                
            </section>
        </article> <!-- Legal -->
    </footer><!-- Footer -->
    <a id="sp-totop" class="backtotop hidden-top" href="#">
    <i class="fa fa-angle-up fa-3x"></i></a>
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
              zoom: 16,
              disableDefaultUI: true,
              zoomControl: true,
              scaleControl: false,
              draggable: true,
              scrollwheel: false,
            });
            
             var image = './images/Farmdale_Map_Marker.png';
             var marker = new google.maps.Marker({map: map, position: {lat: 38.1358216, lng: -85.6394093},
             icon: image});
                marker.addListener('click', function() {
                    infowindow.open(map, marker);
                });
           }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
            async defer></script>

            <script type="text/javascript">
            function openBelief(evt, beliefName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace("is-active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(beliefName).style.display = "block";
    evt.currentTarget.className += " is-active";
}
</script>
    </body>
 </html>
