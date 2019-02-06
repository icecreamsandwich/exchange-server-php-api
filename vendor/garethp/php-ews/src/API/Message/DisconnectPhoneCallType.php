<?php

namespace garethp\ews\API\Message;

/**
 * Class representing DisconnectPhoneCallType
 *
 *
 * XSD Type: DisconnectPhoneCallType
 *
 * @method \garethp\ews\API\Type\PhoneCallIdType getPhoneCallId()
 * @method DisconnectPhoneCallType setPhoneCallId(\garethp\ews\API\Type\PhoneCallIdType $phoneCallId)
 */
class DisconnectPhoneCallType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\PhoneCallIdType
     */
    protected $phoneCallId = null;
}
