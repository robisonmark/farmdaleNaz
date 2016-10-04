<?php 

$email_from = "mark@farmdalenaz.org";

$name = $_POST['contact_name'];
$visitor_email = $_POST['email'];
$phone = $_POST['phone_number'];

$team = $_POST['team_name'];
$team1 = $_POST['player_1'];
$team2 = $_POST['player_2'];
$team3 = $_POST['player_3'];
$team4 = $_POST['player_4'];
$team5 = $_POST['player_5'];

$message = "\r\n Team Name: $team \r\n Team Members: \n $team1 \n $team2 \n $team3 \n $team4 \n $team5 \r\n From: $visitor_email \r\n $name \n $phone";


$formcontent ="From: $name \n Message: $message";
$recipient = "mark@farmdalenaz.org";
$subject = "3-v-3 Registration";
$mailheader = "From: $email_from \r\n";
$mailheader .= "Reply-To: $email \r\n";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$return = "3v3.php";

mail($recipient, $subject, $formcontent, $mailheader, $headers) or die("Error!");
 
header('Location: http://farmdalenaz.org/' . $return);
?>