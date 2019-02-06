<?php

use garethp\ews\API;
use garethp\ews\API\Enumeration;

$api = API::withUsernameAndPassword('server', 'username', 'password');

//Get the default calendar
$calendar = $api->getCalendar();

//Do whatever it is you need to do to get the folderId here
$folderId = $api
    ->getFolderByDisplayName('My Public Folder', Enumeration\DistinguishedFolderIdNameType::PUBLICFOLDERSROOT)
    ->getFolderId();

//Set the folderId
$calendar->setFolderId($folderId);

//Perform operations on public folders as normal from here on out
$changes = $calendar->listChanges();
