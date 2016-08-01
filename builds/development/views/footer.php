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
        <div class="row">
            <div class="con-content">
                <div class="col half one">
                    <div class="servicetimes">
                        <div class="weekly">
                            <div class="sunday">
                                <h4>Sunday</h4>
                                <p>Small Groups 9:30am </p>
                                <p>Worship Service 10:30am </p>
                            </div>
                            <div class="wednesday">
                                <h4>Wednesday</h4>
                                <p>Livewire Student Ministries 6:00pm</p>
                                <p>Men, Women and Kids 7:00pm</p>
                            </div>
                        </div>
                    </div>
                </div><div class="col half one">
                     <div class="foot_add">
                        <h4>Address:</h4>
                        <p>6501 Vandre Avenue</p>
                        <p>Louisville, Kentucky 40218</p>
                   </div>
                   <div class="foot_phone">
                        <h4>Phone:</h4>
                        <a href="tel:502-969-1432">502.969.1432</a>
                    </div>
                    <div class="foot_email">
                        <h4>Email:</h4>
                        <a href="mailto: info@farmdalenaz.org">info@farmdalenaz.org</a>
                    </div>
                    </div><!-- Address -->
                </div>
            </div>
        </div>
        <div class="legal">
            Copyright &copy; <?php echo date("Y") ?> Farmdale Church of the Nazarene
        </div><!-- Legal -->
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

            <script>
                $(document).ready(function() {
                    $('.belieflink').on('click', function(){
                        $(this).siblings().removeClass('isactive');
                        $(this).addClass('isactive');
                        id = $(this).attr('id');
                        idnum = id.split('-',2);
                        // alert(idnum[1]);
                        content = '#content-'+idnum[1];
                        currentActive = '#' + $('.is-active').attr('id');
                        // alert(currentActive);
                        $(currentActive).removeClass('is-active');
                        $(content).addClass('is-active');
                    });
                });
            </script> 
    </body>
 </html>
