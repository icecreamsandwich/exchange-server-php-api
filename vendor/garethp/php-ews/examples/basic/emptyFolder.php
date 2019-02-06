<?php

require 'vendor/autoload.php';

use garethp\ews\API;
use garethp\ews\API\Enumeration\DistinguishedFolderIdNameType;

$api = API::withUsernameAndPassword('server', 'username', 'password');
$api->emptyFolder($api->getFolderByDistinguishedId(DistinguishedFolderIdNameType::DELETEDITEMS)->getFolderId());
