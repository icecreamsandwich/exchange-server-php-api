<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/jquery.timepicker.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body>
<h2>Schedule Event</h2>
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

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
<script src="../js/script.js"></script>
<div>
  
  <form method="POST" action="../submitHandler.php">
    <table class='demo_table'>
  <tr>
    <td>Event Name</td>
    <td><input type="text" id="ename" name="ename" placeholder="Title"></td>
  </tr>
  <tr>
    <td>Date :</td>
    <td><input type="text" id="datefield" name="datefield" placeholder="Date" data-time-format="H:i:s"></td>
  </tr>
  <tr>
    <td>From :</td>
    <td><input type="text" id="from" name="from" placeholder="From" data-time-format="H:i:s"></td>
  </tr>
  <tr>
    <td>To :</td>
    <td><input type="text" id="to" name="to" placeholder="To" data-time-format="H:i:s"></td>
  </tr>
  </table>
    <input type="submit" name="submitBtn" value="Submit">
  </form>
</div>

<?php

// Autoload files using the Composer autoloader.
require_once __DIR__ . '/../vendor/autoload.php';

use garethp\ews\API;
// Set connection information.
$server = 'ex.gasf.com';
$username = 'Administrator';
$password = 'tech121login*';

$api = API::withUsernameAndPassword($server, $username, $password);

if(isset($_POST['submitBtn'])){
    $ename = $_POST["ename"];
    $date = $_POST["date"];
    $start = $_POST["start"];
    $end = $_POST["end"];

    echo $ename.'-'.$date.'-'.$start.'-'.$end;exit;

    $calendar = $api->getCalendar();
    $start = new DateTime($start);
    $end = new DateTime($end);
    $createdItemIds = $calendar->createCalendarItems(array(
        'Subject' => $ename,
        'Start' => $start->format('c'),
        'End' => $end->format('c')
    ));
    
}

?>
<script src="../js/jquery-3.3.1.min.js"></script>
<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script src="../js/jquery.timepicker.min.js"></script>
<script>
$(document).ready(function(){
  $('#from,#to').timepicker();
  $("#datefield").datepicker();
});
</script>
</body>
</html>




