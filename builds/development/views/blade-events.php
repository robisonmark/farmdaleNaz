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
<!--  -->
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
			<div class="update-column social-column"
>				<div class="update-header">Social</div>
				<div class="update-column-content">
				
					<div id="twitter-news"><a class="twitter-timeline"
  href="https://twitter.com/farmdaleNaz">

</a></div>


					 <?php 

					 require_once __DIR__ . '/FacebookSDK/src/Facebook/autoload.php';
						 
						$fbData = array(
						    'consumer_key' => '899573700188778',
						    'consumer_secret' => '58ac3af2917c71027795c0dd7f966ddc',
						    'default_graph_version' => 'v2.7'
						);
						 
						$fb = new Facebook\Facebook($fbData);
						 
						$helper = $fb->getRedirectLoginHelper();
						try {
						  $accessToken = $helper->getAccessToken();
						 
						  // this token will be valid for next 2 hours
						 
						} catch(Facebook\Exceptions\FacebookResponseException $e) {
						  // When Graph returns an error
						  echo 'Graph returned an error: ' . $e->getMessage();
						  exit;
						} catch(Facebook\Exceptions\FacebookSDKException $e) {
						  // When validation fails or other local issues
						  echo 'Facebook SDK returned an error: ' . $e->getMessage();
						  exit;
						}
						// $page_id = '385515538258712';
						// $accessToken = new Facebook\Authentication\AccessToken('{example-access-token}', $expires);
						// $access_token = 'EAACEdEose0cBAA173OA5oCkA3iDShbntvcymGHn1zDUZCFvrZAxf6V3ppGkFOQOpcu1LolfryxROVwRwVi0EaO9wrvWruWnNYIt6eEZBSD6u9NXp9qILWC5LAnns1smnmUcyWgX9ZAC0NDDkL8j65w0paE2BJwHXjmH98zJTlAZDZD';
						// //Get the JSON
						// $json_object = file_get_contents('https://graph.facebook.com/' . $page_id . '/posts?access_token=' . $access_token);
						// //Interpret data
						// $fbdata = json_decode($json_object);
						// // foreach ($fbdata->data as $post )
						// // 	{
						// // 		$posts .= '<p><a href="' . $post->link . '">' . $post->story . '</a></p>';
						// // 		$posts .= '<p><a href="' . $post->link . '">' . $post->message . '</a></p>';
						// // 		$posts .= '<p>' . $post->description . '</p>';
						// // 		$posts .= '<br />';
						// // 	}
						// 	print_r($fbdata);
						// //Display the posts
						
						?>

				</div>
			</div>
			<div style="clear:both"></div>
		</div>
	</div>
</div>

</div>