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

 print_r($mails[1]->getSender()->getNonNullItems()['mailbox']->getName()).'<br>'; 
 print_r($mails[1]->getConversationTopic()).'<br>';
 print_r($mails[1]->getConversationIndex()).'<br>';
 exit;
/* print_r($mails[1]->getSender());
print_r($mails[1]->getCcRecipients());
print_r($mails[1]->getFrom());
print_r($mails[1]->getReplyTo()); */
//print_r($mails->getReceivedRepresenting()->getNonNullItems()['mailbox']->getEmailAddress());
//print_r($mails[1]->getIsResponseRequested());


foreach ($mails as $key => $value) {
    print_r($value->getReceivedRepresenting()->getNonNullItems()['mailbox']->getEmailAddress());
    print_r($value->getReceivedRepresenting()->getNonNullItems()['mailbox']->getName());
    print_r($value->getReceivedRepresenting()->getNonNullItems()['mailbox']->getItemId());
}
exit;