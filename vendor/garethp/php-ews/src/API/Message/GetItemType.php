<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetItemType
 *
 *
 * XSD Type: GetItemType
 *
 * @method \garethp\ews\API\Type\ItemResponseShapeType getItemShape()
 * @method GetItemType setItemShape(\garethp\ews\API\Type\ItemResponseShapeType $itemShape)
 * @method \garethp\ews\API\Type\NonEmptyArrayOfBaseItemIdsType getItemIds()
 * @method GetItemType setItemIds(\garethp\ews\API\Type\NonEmptyArrayOfBaseItemIdsType $itemIds)
 */
class GetItemType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\ItemResponseShapeType
     */
    protected $itemShape = null;

    /**
     * @var \garethp\ews\API\Type\NonEmptyArrayOfBaseItemIdsType
     */
    protected $itemIds = null;
}
