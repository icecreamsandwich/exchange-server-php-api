<?php

use garethp\ews\CalendarAPI as API;

$api = API::withUsernameAndPassword('server', 'username', 'password', ['drillDownResponses' => false]);
$responses = $api->getClient()->GetServerTimeZones();
$timezones = $responses
    ->getResponseMessages()
    ->getServerTimeZonesResponseMessage()
    ->getTimeZoneDefinitions()
    ->TimeZoneDefinition;
