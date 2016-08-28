<?php         
        include  '/var/www/google-api-php-client/src/Google/autoload.php';

        $monthNames = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec');
        
        if (!isset($_REQUEST["month"])) 
            $_REQUEST["month"] = date("n");
        if (!isset($_REQUEST["year"])) 
            $_REQUEST["year"] = date("Y");
        
        $cMonth = $_REQUEST["month"];
        $cYear = $_REQUEST["year"];
        
        $prev_year = $cYear;
        $next_year = $cYear;
        $prev_month = $cMonth-1;
        $next_month = $cMonth+1;
        
        if ($prev_month == 0 ) {
            $prev_month = 12;
            $prev_year = $cYear - 1;
        }
        if ($next_month == 13 ) {
            $next_month = 1;
            $next_year = $cYear + 1;
        }
?>
<div class="container">
<div id="containernew">
        <table class="table-tophat">
            <tr >
                <td colspan="1" class="title arrow" align="left">  <a href="<?php echo $_SERVER["PHP_SELF"] . "?month=". $prev_month . "&year=" . $prev_year; ?>"><i class="fa fa-arrow-circle-left fa-3x" aria-hidden="true"></i></a></td>
                <td colspan="5" class="title"><strong><?php echo $monthNames[$cMonth-1].' '.$cYear; ?></strong></td>
                <td colspan="1" class="title arrow" align="right"><a href="<?php echo $_SERVER["PHP_SELF"] . "?month=". $next_month . "&year=" . $next_year; ?>"><i class="fa fa-arrow-circle-right fa-3x" aria-hidden="true"></i></a></td>
            </tr>
            <tr class="table-day">
                <td class="day title"><strong>Sun</strong></td>
                <td class="day title"><strong>Mon</strong></td>
                <td class="day title"><strong>Tue</strong></td>
                <td class="day title"><strong>Wed</strong></td>
                <td class="day title"><strong>Thu</strong></td>
                <td class="day title"><strong>Fri</strong></td>
                <td class="day title"><strong>Sat</strong></td>
            </tr>
<?php
        date_default_timezone_set('America/Kentucky/Louisville');
        $timestamp = mktime(0,0,0,$cMonth,1,$cYear);
      //  $startday = $thismonth['wday'];
        $monthNum = date("m", time());
        $daysInMonth = date("t", $timestamp);
        $today = date('j', time());
        
        $monthBeginDayOfWeek = date("w", $timestamp); 
        
        $timeMin = date('c',$timestamp);
        $timeMax = date('c', mktime(0,0,0,$cMonth,$daysInMonth,$cYear));
        
        $client = new Google_Client();
        $client->setApplicationName("First Care CPR");
        $client->setDeveloperKey("AIzaSyCk2kJjGg0vrNhiB1nGxT_VQe2uRDO7ixI");

        $service = new Google_Service_Calendar($client);

        $calendarId = 'farmdalenaz@gmail.com';

        $optParams = array(
            'orderBy' => 'startTime',
            'singleEvents' => TRUE,
            'timeMin' => $timeMin,
            'timeMax' => $timeMax
        );

        $results = $service->events->listEvents($calendarId, $optParams);

        $events = $results->getItems();
        
        $j = 0;
        for($i = 0; $i < (($daysInMonth + $monthBeginDayOfWeek) + (7-($daysInMonth + $monthBeginDayOfWeek) % 7)); $i++) 
        { 
            if($i % 7 == 0)
            {
                echo "<table><tr>";
            }
            if($i < $monthBeginDayOfWeek)
            {    
                echo '<td class="lastMonth"></td>';
            }
            elseif ($i >= ($daysInMonth + $monthBeginDayOfWeek)) {
                echo '<td class="nextMonth"></td>';
            } 
            else 
            {
                echo '<td class ="currentMonth';
                if (($i-$monthBeginDayOfWeek + 1) == $today && $cMonth == $monthNum){
                    echo ' today';
                }
                if (count($events) > 0)
                {
                    
                    if (($i-$monthBeginDayOfWeek + 1) == date('j',strtotime($events[$j]['start']['dateTime'])) && is_null($events[$j]['start']['dateTime']) == FALSE )
                    {
                        echo ' event" id ="'.$j.'">'.($i-$monthBeginDayOfWeek + 1);
                        while(($i-$monthBeginDayOfWeek + 1) == date('j',strtotime($events[$j]['start']['dateTime']))) 
                        {
                          echo '<br/><div class="time">' . date('g:i a', strtotime($events[$j]['start']['dateTime'])) . '<a href="'.$events[$j]->getHtmlLink().'">'.$events[$j]->getSummary()."</a> </div>";
                            $j++;
                        }
                        echo "</td>";
                    }
                    else {
                        echo '">'.($i-$monthBeginDayOfWeek + 1)."</td>";
                    }    
                }
                else {
                    echo '">'.($i-$monthBeginDayOfWeek + 1)."</td>";
                    
                }
            }
            if($i % 7 == 6)
            {
                echo "</tr></table>";
            }
            // echo $i;
        }
?>
</table></div>
<div class="dayDetail">
</div>
</div>
</div>
</div>

<script>
    $(".event").click(function(){
        
        if ((".dayDetail p").length) {
            $(".dayDetail p").remove();
        }
        var eventId = $(this).attr('id');
        
        var events = <?php echo json_encode($events); ?>;
        var summary = events[eventId].summary;
        var location = events[eventId].location;
        // var event = events[eventId]['start']['dateTime'];
        $(".dayDetail").append('<p>'+ summary +'</p>');
        if (location != null) {
            $(".dayDetail").append('<p>'+ location +'</p>');
        }
    // $(".dayDetail").append('<p>' + event + '</p>');
    }); 
</script>