<?php

use garethp\ews\ContactsAPI as API;
use \garethp\ews\API\Enumeration;

$api = API::withUsernameAndPassword('server', 'username', 'password');

$api->createContacts(array(
    'GivenName' => 'John',
    'Surname' => 'Smith',
    'EmailAddresses' => array(
        'Entry' => array('Key' => Enumeration\EmailAddressKeyType::EMAIL_ADDRESS_1, '_value' => 'john.smith@gmail.com')
    ),
    //Creating multiple entries
    'PhoneNumbers' => array(
        'Entry' => array(
            array('Key' => Enumeration\PhoneNumberKeyType::HOME_PHONE, '_value' => '000'),
            array('Key' => Enumeration\PhoneNumberKeyType::BUSINESS_PHONE, '_value' => '111'),
        )
    ),
    'PhysicalAddresses' => array(
        'Entry' => array(
            'Key' => Enumeration\PhysicalAddressKeyType::HOME,
            'street' => '123 Street',
            'city' => '123 City',
            'state' => '123 State',
            'countryOrRegion' => '123 Country',
            'postalCode' => '12345',
        )
    ),
));
