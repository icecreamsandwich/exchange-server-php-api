<?php

use garethp\ews\API;

//Create and build the client
$api = API::withUsernameAndPassword('server', 'username', 'password', ['timezone' => 'UTC']);
$calendar = $api->getCalendar();

//Check if one (or more) users are all available for a period of 30 minutes between 10AM and 12PM
$available = $calendar->areAvailable('10AM', '12PM', 30, ['firstAttendeeEmail', 'secondAttendeeEmail']);
