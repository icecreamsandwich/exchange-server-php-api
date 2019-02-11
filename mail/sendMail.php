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
$message = new Type\MessageType();
$message->setBody('Some Text');
$message->setSubject('Test Subject');
$message->setToRecipients('admin@mail.gasf.com','Muneeb.Mukhthar@test.exchange.com');
$return = $api->sendMail($message);
echo 'successfully sent the mail';