<?php

namespace garethp\ews\API\Message;

/**
 * Class representing UploadItemsType
 *
 *
 * XSD Type: UploadItemsType
 *
 * @method UploadItemsType addItems(\garethp\ews\API\Type\UploadItemType $items)
 * @method \garethp\ews\API\Type\UploadItemType[] getItems()
 * @method UploadItemsType setItems(array $items)
 */
class UploadItemsType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\UploadItemType[]
     */
    protected $items = null;
}
