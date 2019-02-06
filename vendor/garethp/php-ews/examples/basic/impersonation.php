<?php

use garethp\ews\API\Type\ConnectingSIDType;
use garethp\ews\API\Type\ExchangeImpersonation;

//Impersonate an email address
$api = \garethp\ews\API::withUsernameAndPassword(
    'server',
    'username',
    'password',
    ['impersonation' => 'user@domain.com']
);

//Build your own impersonation
$connectingSID = new ConnectingSIDType();
$connectingSID->setPrincipalName('Some Name');
$connectingSID->setPrimarySmtpAddress('user@domain.com');

$impersonation = new ExchangeImpersonation();
$impersonation->setConnectingSID($connectingSID);

$api = \garethp\ews\API::withUsernameAndPassword(
    'server',
    'username',
    'password',
    ['impersonation' => $impersonation]
);
