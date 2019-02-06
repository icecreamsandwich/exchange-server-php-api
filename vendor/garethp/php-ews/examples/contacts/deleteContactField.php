<?php

use garethp\ews\ContactsAPI as API;

$api = API::withUsernameAndPassword('server', 'username', 'password');

$contact = $api->getContacts();

$api->updateContactItem($contact[0]->getItemId(), array(
    'deleteFields' => array(
        'GivenName',
        'PhoneNumber:HomePhone'
    )
));
