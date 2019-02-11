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
    $date = $_POST["datefield"];
    $start = $_POST["start"];
    $end = $_POST["end"];

    $calendar = $api->getCalendar();
    $start = new DateTime('12:00 AM');
    $end = new DateTime('04:00 AM');
    /* $start = new DateTime($start);
    $end = new DateTime($end); */
    $createdItemIds = $calendar->createCalendarItems(array(
        'Subject' => $ename,
        'Start' => $start->format('c'),
        'End' => $end->format('c')
    ));
    
    #print_r($createdItemIds);exit;
    Header('Location:getCalendarItems')
}

?>