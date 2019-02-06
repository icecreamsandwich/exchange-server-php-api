<?php

require_once "vendor/autoload.php";

use garethp\ews\API\Type;
use garethp\ews\MailAPI;

//This one is a bit trickier. Rather than sending the email directly, we have to first create the email, then create the
//attachments, then send the email.

$api = MailAPI::withUsernameAndPassword('server', 'username', 'password');

$message = new Type\MessageType();
$message->setBody('Some Text');
$message->setSubject('Test Subject');
$message->setToRecipients('test@test.com');

//Create our message without sending it
$mailId = $return = $api->sendMail($message, array('MessageDisposition' => 'SaveOnly'));

//Create our Attachments
$api->getClient()->CreateAttachment(array (
    'ParentItemId' => $mailId->toArray(),
    'Attachments' => array (
        'FileAttachment' => array (
            'Name' => 'picture.jpg',
            'Content' => file_get_contents('picture.jpg')
        )
    ),
));

//We need to fetch the ItemId again. This is because the ItemId contains a "ChangeKey", which is an Id for that specific
//version of the item. Since we've added attachments, the item has changed, so we need to get the new change key before
//we can send the message
$mailId = $api->getItem($mailId)->getItemId();

//Send the message
$api->getClient()->SendItem(array (
    'SaveItemToFolder' => true,
    'ItemIds' => array (
        'ItemId' => $mailId->toArray()
    )
));
