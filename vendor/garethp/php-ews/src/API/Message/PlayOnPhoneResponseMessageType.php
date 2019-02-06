<?php

namespace garethp\ews\API\Message;

/**
 * Class representing PlayOnPhoneResponseMessageType
 *
 *
 * XSD Type: PlayOnPhoneResponseMessageType
 *
 * @method \garethp\ews\API\Type\PhoneCallIdType getPhoneCallId()
 * @method PlayOnPhoneResponseMessageType setPhoneCallId(\garethp\ews\API\Type\PhoneCallIdType $phoneCallId)
 */
class PlayOnPhoneResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\PhoneCallIdType
     */
    protected $phoneCallId = null;
}
