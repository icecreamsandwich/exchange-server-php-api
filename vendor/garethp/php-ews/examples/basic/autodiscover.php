<?php

include "vendor/autoload.php";

use garethp\ews\API\ExchangeAutodiscover;
use garethp\ews\API\Exception\AutodiscoverFailed;
use garethp\ews\API;

try {
    //API will now be an instance of \garethp\ews\API;
    $api = ExchangeAutodiscover::getAPI('test@test.com', 'password');
    $timezoneList = $api->getServerTimezones();

    //You should never run the Autodiscover more than once. It can make between 1 and 5 calls before giving up, or
    //before finding your server, depending on how many different attempts it needs to make. For this reason, you should
    //only ever do it once to find out where your server is located and what version it's running, and then hard code
    //that or store it in a database, or anything other than running Autodiscover again
    $server = $api->getClient()->getServer();
    $version = $api->getClient()->getVersion();

    $api = API::withUsernameAndPassword($server, 'test@test.com', 'password', [
        'version' => $version
    ]);
} catch (AutodiscoverFailed $exception) {
    //Autodiscover failed
}
