<?php

require_once "vendor/autoload.php";

use garethp\ews\API\Type;
use garethp\ews\MailAPI;

$api = MailAPI::withUsernameAndPassword('server', 'username', 'password');

$message = new Type\MessageType();
$message->setBody('Some Text');
$message->setSubject('Test Subject');
$message->setToRecipients('test@test.com');

$return = $api->sendMail($message);
