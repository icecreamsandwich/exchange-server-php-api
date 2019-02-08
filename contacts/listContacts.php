<?php

// Autoload files using the Composer autoloader.
require_once __DIR__ . '/../vendor/autoload.php';
//List contacts of a user
use garethp\ews\ContactsAPI as API;

$server = 'ex.gasf.com';
$username = 'Administrator';
$password = 'tech121login*';

$api = API::withUsernameAndPassword($server, $username, $password);
$contacts = $api->getContacts(); 
$contact_items = $contacts->getItems();
foreach ($contact_items as $key => $value) {
    $displayName['displayNames'][] = $value->getDisplayName();;
    $getGivenName['givenNames'][] = $value->getGivenName();
    $getInitials['initials'][] = $value->getInitials();
    $getMiddleName['middleNames'][]= $value->getMiddleName();
    $getNickname['nickNames'][] = $value->getNickname();
    $getBirthday['birthdays'][] = $value->getBirthday();
    $getPhoneNumbers['phoneNumbers'][] = $value->getPhoneNumbers();
}

$merged_ar = array_merge(
    $displayName,
    $getGivenName,$getInitials,
    $getMiddleName,$getNickname,
    $getBirthday,$getPhoneNumbers
);

echo json_encode($merged_ar);exit;

//If you want to get contacts within a folder
/* $folder = $api->getFolderByDisplayName('Your Folder', 'contacts');
$contacts = $api->getContacts($folder->getFolderId()); */