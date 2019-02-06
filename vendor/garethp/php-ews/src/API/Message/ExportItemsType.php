<?php

namespace garethp\ews\API\Message;

/**
 * Class representing ExportItemsType
 *
 *
 * XSD Type: ExportItemsType
 *
 * @method ExportItemsType addItemIds(\garethp\ews\API\Type\ItemIdType $itemIds)
 * @method \garethp\ews\API\Type\ItemIdType[] getItemIds()
 * @method ExportItemsType setItemIds(array $itemIds)
 */
class ExportItemsType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\ItemIdType[]
     */
    protected $itemIds = null;
}
