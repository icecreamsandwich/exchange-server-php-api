<?php

// Autoload files using the Composer autoloader.
require_once __DIR__ . '/../vendor/autoload.php';

use garethp\ews\API;
// Set connection information.
$server = 'ex.gasf.com';
$username = 'Administrator';
$password = 'tech121login*';

$api = API::withUsernameAndPassword($server, $username, $password);

/* if($api) echo "in calendar item create page";
else echo "cant connect to ews";
exit; */

$calendar = $api->getCalendar();
$start = new DateTime('12:00 AM');
$end = new DateTime('04:00 AM');
$createdItemIds = $calendar->createCalendarItems(array(
    'Subject' => 'New calendar',
    'Start' => $start->format('c'),
    'End' => $end->format('c')
));

print_r($createdItemIds);exit;