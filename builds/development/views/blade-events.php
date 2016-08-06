<div class="container">
	<div id="events">
		<h1>What's Happening at Farmdale</h1>
	<div class="News-Events-Con">
		<div class="update-columns">
			<!-- <div class="update-column news-column">
				<div class="update-header">
					News
				</div>
				<div class="update-column-content">
					<a href="https://www.csp.edu/news/summer-session-enrollment-trends-fifth-consecutive-year/">
						<span>May 27, 2016</span>
						<strong>Summer Session Enrollment Trends Up For Fifth Consecutive Year</strong>
						<p>Summer enrollment at Farmdale University, St. Paul has increased for the fifth consecutive year as the Office of Institutional Research […]</p>
					</a>
					<a href="https://www.csp.edu/news/32-programs-now-offered-exercise-science-sport-management/">
						<span>May 25, 2016</span>
						<strong>3+2 Programs Now Offered in Exercise Science and Sport Management</strong>
						<p>The Department of Kinesiology &amp; Health Sciences at Farmdale University, St. Paul has announced it will offer two new 3+2 […]</p>
					</a>
					<a href="https://www.csp.edu/news/Farmdales-home-school-pe-program-a-success/">
						<span>May 18, 2016</span>
						<strong>Farmdale’s Homeschool PE Program a Success</strong>
						<p>The Spring 2016 semester saw the successful debut of the Farmdale Homeschool Physical Education &amp; Sport Program, a mutually beneficial […]</p>
					</a>
					<a href="https://www.csp.edu/news/dr-paul-hillmer-named-dean-of-the-college-of-arts-letters/">
						<span>May 18, 2016</span>
						<strong>Dr. Paul Hillmer Named Dean of the College of Arts &amp; Letters</strong>
						<p>Vice President of Academic Affairs Dr. Marilyn Reineck has announced that Dr. Paul Hillmer&nbsp; (’82) has accepted an appointment as […]</p>
					</a>
					<a href="https://www.csp.edu/news/csp-graduate-finalist-for-2016-minnesota-teacher-of-the-year/">
						<span>May 15, 2016</span>
						<strong>CSP Graduate Named 2016 Minnesota Teacher of the Year</strong>
						<p>Farmdale St. Paul graduate AB Wright (’11) was&nbsp;named the 2016 Minnesota Teacher of the Year by Education Minnesota. AB, an […]</p>
					</a>
				</div>
			</div> -->
			<div class="update-column events-column">
				<div class="update-header">Coming Up 
					<a href="/events-full.php" class="right" alt='google-cal'>
						<div class="btn-white">Full Calendar</div>
					</a>
				</div>
				<div class="update-column-content">
					<?php 

						include  '/var/www/google-api-php-client/src/Google/autoload.php';

						$client = new Google_Client();
						$client->setApplicationName("First Care CPR");
						$client->setDeveloperKey("AIzaSyBs_-QQWSTiC_Ep0VkyyQ-z_Nw3cD2mpWA");

						$service = new Google_Service_Calendar($client);

						$calendarId = 'farmdalenaz@gmail.com';

						$optParams = array(
							'maxResults' => 10,
							'orderBy' => 'startTime',
							'singleEvents' => TRUE,
							'timeMin' => date('c'),
						);

						$results = $service->events->listEvents($calendarId, $optParams);

						if (count($results->getItems()) == 0) {
							echo "<p> No Upcoming Events found. </p>";
						} else {
							foreach ($results->getItems() as $event) {
								$start = $event->start->dateTime;
								if (empty($start)) {
									$start = $event->start->date;
								}

								$startdate = new  DateTime($start);
								$enddate = new DateTime($event->end->dateTime);
								$dateString = $startdate->format('M d, Y');
								$link = $event->getHtmlLink();
								if(strlen($event->getDescription()) > 100) {
									$shortDesc = substr($event->getDescription(),0,100);
								}
								else 
								{
									$shortDesc = $event->getDescription();
								}
								echo "<a href= ".$link."><span>".$dateString."</span><strong>".$event->getSummary()."<p>".$shortDesc."</p></a>";
							}

						}

					?>					
					<a href="https://www.csp.edu/event/2016-creation-conference/">
						<span>June 10, 2016</span>
						<strong>2016 Creation Conference</strong>
						<p>Concordia St. Paul will host the 4th annual Creation Conference, entitled, “The Origin of Humans, Adam and Eve: Myth or […]</p>
					</a>
					<!--<a href="https://www.csp.edu/event/minnesota-private-college-week/">
						<span>June 20, 2016</span>
						<strong>Minnesota Private College Week</strong>
						<p>A week that encourages you to explore all your college options. Along with other partnering private colleges in Minnesota, Concordia […]</p>
					</a>
					<a href="https://www.csp.edu/event/golden-bear-summer-golf-classic/">
						<span>June 24, 2016</span>
						<strong>Golden Bear Summer Golf Classic</strong>
						<p>Concordia St. Paul athletics will host the 2016 Golden Bear Summer Golf Classic on Friday, June 24 at River Oaks […]</p>
					</a>
					<a href="https://www.csp.edu/event/orientation/">
						<span>June 27, 2016</span>
						<strong>Orientation</strong>
						<p>Learn what it means to be a Concordia student and officially launch your Golden Bear career! Orientation is designed to […]</p>
					</a>
					<a href="https://www.csp.edu/event/building-cultural-bridges-summer-camp/">
						<span>August 1, 2016</span>
						<strong>Building Cultural Bridges Summer Camp</strong>
						<p>The 2016 Building Cultural Bridges Summer Camp, offered by the Hmong Culture and Language Program at Concordia University, St. Paul, […]</p>
					</a>-->
				</div>
			</div>
			<div class="update-column social-column">
				<div class="update-header">Social</div>
				<div class="update-column-content">
				<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
  
</div>
					<div id="twitter-news"><ul></ul></div>
				</div>
			</div>
			<div style="clear:both"></div>
		</div>
	</div>
</div>

</div>