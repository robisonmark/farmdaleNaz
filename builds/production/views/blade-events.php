<div class="container"><div id="events"><h1>What's Happening at Farmdale</h1><div class="News-Events-Con"><div class="update-columns"><div class="update-column events-column"><div class="update-header">Coming Up 
<a href="#" class="right" alt='google-cal'>	<div class="btn-white">Full Calendar</div></a></div><div class="update-column-content"><?php  include '/home/marrob113/google-api-php-client/src/Google/autoload.php'; $client = new Google_Client(); $client->setApplicationName("First Care CPR"); $client->setDeveloperKey("AIzaSyBs_-QQWSTiC_Ep0VkyyQ-z_Nw3cD2mpWA"); $service = new Google_Service_Calendar($client); $calendarId = 'farmdalenaz@gmail.com'; $optParams = array( 'maxResults' => 10, 'orderBy' => 'startTime', 'singleEvents' => TRUE, 'timeMin' => date('c'), ); $results = $service->events->listEvents($calendarId, $optParams); if (count($results->getItems()) == 0) { echo "<p> No Upcoming Events found. </p>"; } else { foreach ($results->getItems() as $event) { $start = $event->start->dateTime; if (empty($start)) { $start = $event->start->date; } $startdate = new DateTime($start); $enddate = new DateTime($event->end->dateTime); $dateString = $startdate->format('M d Y'); $endDateString = $enddate->format('d/m/Y H:i:s'); $link = $event->getHtmlLink(); echo "<a href= ".$link."><span>".$dateString."</span><strong>".$event->getSummary()."<p>".$event->description."</p></a>"; } } ?></div></div><div class="update-column social-column"><div class="update-header">Social</div><div class="update-column-content"><div id="twitter-news"><ul></ul></div></div></div><div style="clear:both"></div></div></div></div></div>