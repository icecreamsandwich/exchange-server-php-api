<?php

require_once "vendor/autoload.php";

use garethp\ews\API\Type;
use garethp\ews\API\Type\CalendarItem;
use garethp\ews\Caster;
use garethp\ews\Test\API\TypeTest;
use garethp\ews\CalendarAPI;

$api = \garethp\ews\API::withUsernameAndPassword(
    'server',
    'username',
    'password',
    [
        'primarySmtpEmailAddress' => 'secondaryEmail@test.com'
    ]
);

$api->getFolderByDistinguishedId('inbox');
