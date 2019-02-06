<?php

namespace garethp\ews\API\Message;

/**
 * Class representing ExportItemsResponseMessageType
 *
 *
 * XSD Type: ExportItemsResponseMessageType
 *
 * @method \garethp\ews\API\Type\ItemIdType getItemId()
 * @method ExportItemsResponseMessageType setItemId(\garethp\ews\API\Type\ItemIdType $itemId)
 * @method string getData()
 * @method ExportItemsResponseMessageType setData(string $data)
 */
class ExportItemsResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\ItemIdType
     */
    protected $itemId = null;

    /**
     * @var string
     */
    protected $data = null;
}
