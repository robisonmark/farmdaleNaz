<div class="container">
	<div id="events">
		<h1>What's Happening at Farmdale</h1>
	<div class="News-Events-Con">
		<div class="update-columns">
			<div class="update-column events-column">
				<div class="update-header">Coming Up 
					<a href="/calendar_matt.php" class="right" alt='google-cal'>
						<div class="btn-white">Full Calendar</div>
					</a>
				</div>
				<div class="update-column-content">
					<?php 

						include  '../google-api-php-client/src/Google/autoload.php';

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
									$shortDesc = substr($event->getDescription(),0,100) . "[...]";
								}
								else 
								{
									$shortDesc = $event->getDescription();
								}
								echo "<a href= ".$link."><span>".$dateString."</span><strong>".$event->getSummary()."<p>".$shortDesc."</p></a>";
							}

						}

					?>					

				</div>
			</div>
			<div class="update-column social-column">
				<div class="update-header">Social</div>
				<div class="update-column-content">
				
				<?php
//Set your App ID and App Secret.
$appID = '899573700188778';
$appSecret = '58ac3af2917c71027795c0dd7f966ddc';
 
//Create an access token using the APP ID and APP Secret.
$accessToken = $appID . '|' . $appSecret;
 
//The ID of the Facebook page in question.
$id = 'farmdalenazarene';
 
//Tie it all together to construct the URL
$url = "https://graph.facebook.com/$id/?fields=name,picture,posts.limit(10){attachments,created_time},tagged&access_token=$accessToken";
 
//Make the API call
$result = @file_get_contents($url);
 
//Decode the JSON result.
$fbdata = json_decode($result, true);
?>
<ul>

		
    						
    
     <?php foreach($fbdata['posts']['data'] as $post){?>

    	
    						
    	
    	<?php foreach($post['attachments']['data'] as $feed){
    		?>
    			<li style="margin: 30px 0;">
    			<?php if(isset($feed['media']['image']['src'])){ ?>
    				<a class="view-on-facebook" target="_blank" href="<?php echo $feed['target']['url'] ?>">
    					<div class="social-photo" style="background-image: url('<?php echo($feed['media']['image']['src'])?>');"></div>
    				</a>
	    			<?php if(isset($feed['description'])) {?>
    					<div class="message">
							<img class="profile-pic" src="https://scontent.xx.fbcdn.net/v/t1.0-1/c0.0.50.50/p50x50/1526737_385516424925290_1922518348_n.jpg?oh=9d1662225e83300f99a5584a063b8155&oe=584DEF3F" />
    						<div class="social-header">

	    						<a href="https://www.facebook.com/farmdalenazarene/"><h4 class="posted-by">Farmdale Nazarene</h4></a>
	    						<p class="time-ago"><?php 

	    						$dateCreated =  date_create($post['created_time']);
	    						$today = date_create(date('Y-m-d H:i:s'));
	    						
	    						$interval = date_diff($dateCreated, $today);
								$days = $interval->format("%a");
								if ($days < 1) {
									echo $interval->format("%i minutes, %s Seconds ago");
								} elseif ($days < 30) {
									echo $interval->format("%d Days, %i minutes, %s Seconds ago");
								} elseif ($days < 365){
									echo $interval->format("%m months, %d Days, %i minutes, %s Seconds ago");
								}
								else {
									echo $interval->format("%y years, %m months, %d Days, %i minutes, %s Seconds ago");
								}
    							?></p>
    						</div>
    						<p style="display:block; white-space: pre-wrap;"><?php echo($feed['description']); ?></p>
    					</div>
    					<?php }  elseif (!isset($feed['description'])){ ?>
    						<div class="message">
							<img class="profile-pic" src="https://scontent.xx.fbcdn.net/v/t1.0-1/c0.0.50.50/p50x50/1526737_385516424925290_1922518348_n.jpg?oh=9d1662225e83300f99a5584a063b8155&oe=584DEF3F" />
    						<div class="social-header">

	    						<a href="https://www.facebook.com/farmdalenazarene/"><h4 class="posted-by">Farmdale Nazarene</h4></a>
	    						<p class="time-ago"><?php 

	    						$dateCreated =  date_create($post['created_time']);
	    						$today = date_create(date('Y-m-d H:i:s'));
	    						
	    						$interval = date_diff($dateCreated, $today);
								$days = $interval->format("%a");
								if ($days < 1) {
									echo $interval->format("%i minutes, %s Seconds ago");
								} elseif ($days < 30) {
									echo $interval->format("%d Days, %i minutes, %s Seconds ago");
								} elseif ($days < 365){
									echo $interval->format("%m months, %d Days, %i minutes, %s Seconds ago");
								}
								else {
									echo $interval->format("%y years, %m months, %d Days, %i minutes, %s Seconds ago");
								}
    							?></p>
    							<p style="display:block; white-space: pre-wrap;"></p>
    						</div>
    					<?php }
    				} elseif (!isset($feed['media']['image']['src'])) {
    					
    				}?>
    			</li><br/>
    	


<?php
    }
   }  

  ?>

	</ul>
	</div>

				</div>
			</div>
			<div style="clear:both"></div>
		</div>
	</div>
</div>

</div>


				
				</div>
			</div>
			<div style="clear:both"></div>
		</div>
	</div>
</div>

</div>



