<?php

// Autoload files using the Composer autoloader.
require_once __DIR__ . '/vendor/autoload.php';

use garethp\ews\API;
use garethp\ews\API\Type;
use garethp\ews\API\Enumeration;

//use \jamesiarmes\PhpEws\Client;
//$ews = new Client($server, $username, $password, $version);

//connect to the exchange server and create a calendar item
$api = API::withUsernameAndPassword($server, $username, $password);
    /* [
        'httpPlayback' => [
            'mode' => 'playback',
            'recordLocation' => __ROOT__ . DS . '/recordings.json'
        ]
    ] */

if($api) echo "connected to ews via garethp lib";
else echo "cant connect to ews";
exit;

$start = new DateTime('8:00 AM');
$end = new DateTime('9:00 AM');

$request = array(
    'Items' => array(
        'CalendarItem' => array(
            'Start' => $start->format('c'),
            'End' => $end->format('c'),
            'Body' => array(
                'BodyType' => Enumeration\BodyTypeType::HTML,
                '_value' => 'This is <b>the</b> body'
            ),
            'ItemClass' => Enumeration\ItemClassType::APPOINTMENT,
            'Sensitivity' => Enumeration\SensitivityChoicesType::NORMAL,
            'Categories' => array('Testing', 'php-ews'),
            'Importance' => Enumeration\ImportanceChoicesType::NORMAL
        )
    ),
    'SendMeetingInvitations' => Enumeration\CalendarItemCreateOrDeleteOperationType::SEND_TO_NONE
);

$request = Type::buildFromArray($request);
$response = $api->getClient()->CreateItem($request);

print_r($response);exit;