<?php

require_once 'vendor/autoload.php';

use garethp\ews\MailAPI;

$api = MailAPI::withUsernameAndPassword('server', 'username', 'password');

$api->emptyTrash();
