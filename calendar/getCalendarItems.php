<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="sidenav">
  <a href="../contacts/listContacts">Contacts</a>
  <button class="dropdown-btn">Calendar 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
      <a href="../calendar/getCalendarItems">Get Calendar</a>
      <a href="../calendar/createCalendarItem.php">Create Calendar</a>
  </div>
  <button class="dropdown-btn">Mail 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
      <a href="../mail/listMail">List Mails</a>
      <a href="../mail/sendMail">Send Mail</a>
  </div>
</div>

<h2>Exchange Server Demo</h2>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
<script src="../js/script.js"></script>

<?php

// Autoload files using the Composer autoloader.
require_once __DIR__ . '/../vendor/autoload.php';

use garethp\ews\API;
// Set connection information.
$server = 'ex.gasf.com';
$username = 'Administrator';
$password = 'tech121login*';

$api = API::withUsernameAndPassword($server, $username, $password);

$calendar = $api->getCalendar();
$items = $calendar->getCalendarItems();
#print_r($items);exit;
//iterate through the calendar items 
$calendarItems = $items->getItems();
#print_r($calendarItems[0]->getDuration());exit;

/* 
echo  $calendarItems[0]->getSubject().'<br>';
echo  $calendarItems[0]->getStart().'<br>';
echo  $calendarItems[0]->getEnd().'<br>';
echo  $calendarItems[0]->getDateTimeStamp().'<br>';
echo  $calendarItems[0]->getLocation().'<br>';
$di = new DateInterval($calendarItems[0]->getDuration());
$duration =  $di->format('%h:%i:%s');
exit; */


$html = "<table class='demo_table' style='margin-left:300px;'>
            <th>Subject</th>
            <th>Start</th>
            <th>End</th>
            <th>Timestamp</th>
            <th>Location</th>
            <th>Duration</th>
            ";
    foreach ($calendarItems as $key => $value) {      
        $html .= '<tr>
                    <td>'.$value->getSubject().'</td>
                    <td>'.$value->getStart().'</td>
                    <td>'.$value->getEnd().'</td>
                    <td>'.$value->getDateTimeStamp().'</td>
                    <td>'.$value->getLocation().'</td>
                    <td>'.$duration.'</td>
                   
            </tr>';
    }
    $html .= "</table>";

echo $html;
?>

</body>
</html>
