<?php

// Autoload files using the Composer autoloader.
require_once __DIR__ . '/../vendor/autoload.php';

use garethp\ews\API\Type;
use garethp\ews\MailAPI;

// Set connection information.
$server = 'ad.gasf.com';
$username = 'Administrator';
$password = 'trueidea121*';

$api = MailAPI::withUsernameAndPassword($server, $username, $password);

/* if($api) echo "in mail listing page";
else echo "cant connect to ews";
exit;
 */
$mails = $api->getMailItems();

print_r($mails);exit;