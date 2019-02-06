<?php

use garethp\ews\ContactsAPI as API;

$api = API::withUsernameAndPassword('server', 'username', 'password');

$contact = $api->getContacts();

$api->deleteItems($contact[0]->getItemId());
