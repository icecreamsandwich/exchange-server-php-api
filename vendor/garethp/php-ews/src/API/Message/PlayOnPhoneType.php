<?php

namespace garethp\ews\API\Message;

/**
 * Class representing PlayOnPhoneType
 *
 *
 * XSD Type: PlayOnPhoneType
 *
 * @method \garethp\ews\API\Type\ItemIdType getItemId()
 * @method PlayOnPhoneType setItemId(\garethp\ews\API\Type\ItemIdType $itemId)
 * @method string getDialString()
 * @method PlayOnPhoneType setDialString(string $dialString)
 */
class PlayOnPhoneType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\ItemIdType
     */
    protected $itemId = null;

    /**
     * @var string
     */
    protected $dialString = null;
}
