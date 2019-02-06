<?php

use garethp\ews\ContactsAPI as API;

$api = API::withUsernameAndPassword('server', 'username', 'password', ['drillDownResponses' => false]);

$firstPage = $api->getContacts();

foreach ($firstPage as $contacts) {
    //Work with the first page of contacts here
}

$secondPage = $api->getNextPage($firstPage);

foreach ($secondPage as $contacts) {
    //Work with the second page of contacts here
}

$folders = $api->getChildrenFolders('test');

foreach ($folders as $folder) {
    //Work with folders this way
}

$moreFolders = $api->getNextPage($folders);

foreach ($moreFolders as $folder) {
    //More folders here
}
