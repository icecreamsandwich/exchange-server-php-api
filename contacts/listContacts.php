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
//List contacts of a user
use garethp\ews\ContactsAPI as API;

$server = 'ex.gasf.com';
$username = 'Administrator';
$password = 'tech121login*';

$api = API::withUsernameAndPassword($server, $username, $password);
$contacts = $api->getContacts(); 
$contact_items = $contacts->getItems();

    $html = "<table class='demo_table' style='margin-left:300px;'>
            <th>display Name</th>
            <th>given Name</th>
            <th>middle Name</th>
            <th>nick Name</th>
            <th>birthday</th>
            <th>phoneNumber</th>
            ";
    foreach ($contact_items as $key => $value) {      
        $html .= '<tr>
                    <td>'.$value->getDisplayName().'</td>
                    <td>'.$value->getGivenName().'</td>
                    <td>'.$value->getMiddleName().'</td>
                    <td>'.$value->getNickname().'</td>
                    <td>'.$value->getBirthday().'</td>
                    <td>'.$value->getPhoneNumbers()->Entry->_.'</td>
                   
            </tr>';
    }
    $html .= "</table>";

echo $html;
?>

</body>
</html> 


