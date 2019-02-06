<?php

require_once "vendor/autoload.php";

use garethp\ews\API\Type;
use garethp\ews\MailAPI;

$api = MailAPI::withUsernameAndPassword('server', 'username', 'password');

$mailItem = $api->getMailItems()[0];
$read = $mailItem->isAReply();
