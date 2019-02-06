<?php

// Autoload files using the Composer autoloader.
require_once __DIR__ . '/../vendor/autoload.php';
//List contacts of a user
/* use garethp\ews\ContactsAPI as API;

$server = 'ad.gasf.com';
$username = 'Administrator';
$password = 'trueidea121*';

$api = API::withUsernameAndPassword($server, $username, $password);

$contacts = $api->getContacts();
print_r($contacts);exit;
//If you want to get contacts within a folder
$folder = $api->getFolderByDisplayName('Your Folder', 'contacts');
$contacts = $api->getContacts($folder->getFolderId()); */

use \jamesiarmes\PhpEws\Client;
use \jamesiarmes\PhpEws\Request\FindItemType;
use \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfBaseFolderIdsType;
use \jamesiarmes\PhpEws\Enumeration\DistinguishedFolderIdNameType;
use \jamesiarmes\PhpEws\Enumeration\ResponseClassType;
use \jamesiarmes\PhpEws\Type\ContactsViewType;
use \jamesiarmes\PhpEws\Type\DistinguishedFolderIdType;
// Set connection information.
$server = 'ad.gasf.com';
$username = 'Administrator';
$password = 'trueidea121*'; 
$version = Client::VERSION_2016;
$client = new Client($server, $username, $password, $version);
// Build the request.
$request = new FindItemType();
$request->ParentFolderIds = new NonEmptyArrayOfBaseFolderIdsType();
$request->ContactsView = new ContactsViewType();
// Find contacts in the contacts folder.
$folder_id = new DistinguishedFolderIdType();
$folder_id->Id = DistinguishedFolderIdNameType::CONTACTS;
$request->ParentFolderIds->DistinguishedFolderId[] = $folder_id;
$response = $client->FindItem($request);
// Iterate over the results, printing any error messages or contact ids.
$response_messages = $response->ResponseMessages->FindItemResponseMessage;
foreach ($response_messages as $response_message) {
    // Make sure the request succeeded.
    if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
        $code = $response_message->ResponseCode;
        $message = $response_message->MessageText;
        fwrite(
            STDERR,
            "Failed to search for contacts with \"$code: $message\"\n"
        );
        continue;
    }
    // Iterate over the contacts that were found, printing the id of each.
    $items = $response_message->RootFolder->Items->Contact;
    foreach ($items as $item) {
        $id = $item->ItemId->Id;
        fwrite(STDOUT, "Found contact $id\n");
    }
}