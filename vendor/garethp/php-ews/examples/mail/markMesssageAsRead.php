<?php

require_once "vendor/autoload.php";

use garethp\ews\API\Type;
use garethp\ews\MailAPI;

$api = MailAPI::withUsernameAndPassword('server', 'username', 'password');

$mailItem = $api->getMailItems()[0];
$read = $mailItem->isRead();

if (!$read) {
    //Mark the mail as read
    $api->markMailAsRead($mailItem->getItemId());
} else {
    //Mark it as unread
    $api->markMailAsRead($mailItem->getItemId(), false);
}
