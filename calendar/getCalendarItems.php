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

//iterate through the calendar items 
$calendarItems = $items->getItems();

foreach ($calendarItems as $key => $value) {
   $start['start'][] = $value->getStart();
   $end['end'][] = $value->getEnd();
   $subjects['subjects'][] = $value->getParentFolderId()->subject;
}

$merged_ar = array_merge($start, $end, $subjects);
echo json_encode($merged_ar,TRUE);exit;

/* 

//Get all items from midday today
$items = $calendar->getCalendarItems('12:00 PM');
//Get all items from 8 AM to 9 AM today
$start = new DateTime('8:00 AM');
$end = new DateTime('9:00 AM');
$items = $calendar->getCalendarItems($start, $end);

print_r($items);exit;
//Get a list of items in a Date Range
$items = $calendar->getCalendarItems('31/05/2015', '31/06/2015'); */