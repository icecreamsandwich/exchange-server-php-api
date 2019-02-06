<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetPhoneCallInformationResponseMessageType
 *
 *
 * XSD Type: GetPhoneCallInformationResponseMessageType
 *
 * @method \garethp\ews\API\Type\PhoneCallInformationType getPhoneCallInformation()
 * @method GetPhoneCallInformationResponseMessageType setPhoneCallInformation(\garethp\ews\API\Type\PhoneCallInformationType $phoneCallInformation)
 */
class GetPhoneCallInformationResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\PhoneCallInformationType
     */
    protected $phoneCallInformation = null;
}
