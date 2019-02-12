<?php
#TODO make it ooops
// Autoload files using the Composer autoloader.
require_once __DIR__ . '/vendor/autoload.php';

use garethp\ews\API;
// Set connection information.
$server = 'ex.gasf.com';
$username = 'Administrator';
$password = 'tech121login*';

$api = API::withUsernameAndPassword($server, $username, $password);

//create calendar action
if(isset($_POST['submitBtn'])){
    $ename = $_POST["ename"];
    $date = $_POST["datefield"];
    $start = $_POST["from"];
    $end = $_POST["to"];

    #echo $ename."-".$date."-".$start."-".$end;exit;

    $calendar = $api->getCalendar();
    /* $start = new DateTime('12:00 AM');
    $end = new DateTime('04:00 AM'); */
    $start = new DateTime($start);
    $end = new DateTime($end);
    $createdItemIds = $calendar->createCalendarItems(array(
        'Subject' => $ename,
        'Start' => $start->format('c'),
        'End' => $end->format('c')
    ));

    Header('Location:calendar/getCalendarItems');
}

//send email action
if(isset($_POST['submitBtnEmail'])){

    $toemail = $_POST["toemail"];
    $subject = $_POST["subject"];
    $body = $_POST["body"];

    #echo $toemail."-".$subject."-".$body;exit;
    // Set connection information.
    $server = 'ex.gasf.com';
    $username = 'Administrator';
    $password = 'tech121login*';

   /*  $api = MailAPI::withUsernameAndPassword($server, $username, $password);
    $message = new Type\MessageType();
    $message->setBody($body);
    $message->setSubject($subject);
    $message->setToRecipients('admin@mail.gasf.com');
    $return = $api->sendMail($message); */
    Header('Location:mail/sendMail');
}

?>