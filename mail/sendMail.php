<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/jquery.timepicker.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
    <td>TO: </td>
    <td><input type="text" id="toemail" name="toemail" valeue="admin@mail.gasf.com" placeholder="To"></td>
  </tr>
  <tr>
    <td>Subject</td>
    <td><input type="text" id="subject" name="subject" placeholder="Subject"></td>
  </tr>
  <tr>
    <td>Body</td>
    <td><textarea rows="4" cols="50" id="body" name="body"></textarea></td>
  </tr>
  </table>
    <input type="submit" name="submitBtnEmail" value="Submit">
  </form>
</div>
<?php

// Autoload files using the Composer autoloader.
require_once __DIR__ . '/../vendor/autoload.php';

use garethp\ews\API\Type;
use garethp\ews\MailAPI;

// Set connection information.
$server = 'ex.gasf.com';
$username = 'Administrator';
$password = 'tech121login*';

/* $api = MailAPI::withUsernameAndPassword($server, $username, $password);
$message = new Type\MessageType();
$message->setBody('Some Text');
$message->setSubject('Test Subject');
$message->setToRecipients('admin@mail.gasf.com','Muneeb.Mukhthar@test.exchange.com');
$return = $api->sendMail($message);
echo 'successfully sent the mail'; */
?>

</body>
</html>
