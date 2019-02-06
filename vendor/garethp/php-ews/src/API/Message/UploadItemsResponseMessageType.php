<?php

namespace garethp\ews\API\Message;

/**
 * Class representing UploadItemsResponseMessageType
 *
 *
 * XSD Type: UploadItemsResponseMessageType
 *
 * @method \garethp\ews\API\Type\ItemIdType getItemId()
 * @method UploadItemsResponseMessageType setItemId(\garethp\ews\API\Type\ItemIdType $itemId)
 */
class UploadItemsResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\ItemIdType
     */
    protected $itemId = null;
}
