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

use garethp\ews\API\Type;
use garethp\ews\MailAPI;

// Set connection information.
$server = 'ex.gasf.com';
$username = 'Administrator';
$password = 'tech121login*';

$api = MailAPI::withUsernameAndPassword($server, $username, $password);

$mails = $api->getMailItems();
#$mailItems = $mails->getItems();
#print_r($mails[0]->getItemClass());exit;

/* print_r($mails[0]->getConversationTopic().'<br>');
echo $mails[0]->getSender()->getNonNullItems()['mailbox']->getName().'<br>';
echo $mails[0]->getSender()->getNonNullItems()['mailbox']->getEmailAddress().'<br>';
echo $mails[0]->getDateTimeReceived().'<br>';
echo $mails[0]->getSubject().'<br>';
echo $mails[0]->getDateTimeSent().'<br>';
echo $mails[0]->getDisplayCc().'<br>';
echo $mails[0]->getDisplayTo().'<br>';
echo $mails[0]->getItemClass() */


$html = "<table class='demo_table' style='margin-left:300px;'>
            <th>Conversation Topic</th>
            <th>Name</th>
            <th>Email Address</th>
            <th>DateTime Received</th>
            <th>Subject</th>
            <th>DateTimeSent</th>
            <th>Reply To</th>
            <th>Display Cc</th>
            <th>ItemClass</th>
            ";
    foreach ($mails as $key => $value) {   
      
        $html .= '<tr>
                    <td>'.$value->getConversationTopic().'</td>
                    <td>'.$value->getSender()->getNonNullItems()['mailbox']->getName().'</td>
                    <td>'.$value->getSender()->getNonNullItems()['mailbox']->getEmailAddress().'</td>
                    <td>'.$value->getDateTimeReceived().'</td>
                    <td>'.$value->getSubject().'</td>
                    <td>'.$value->getDateTimeSent().'</td>
                    <td>'.$value->getDisplayTo().'</td>
                    <td>'.$value->getDisplayCc().'</td>
                    <td>'.$value->getItemClass().'</td>
                   
            </tr>';
    }
    $html .= "</table>";

echo $html;

?>

</body>
</html>