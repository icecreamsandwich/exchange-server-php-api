<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing NonEmptyArrayOfBaseItemIdsType
 *
 *
 * XSD Type: NonEmptyArrayOfBaseItemIdsType
 *
 * @method NonEmptyArrayOfBaseItemIdsType addItemId(ItemIdType $itemId)
 * @method ItemIdType[] getItemId()
 * @method NonEmptyArrayOfBaseItemIdsType setItemId(array $itemId)
 * @method NonEmptyArrayOfBaseItemIdsType addOccurrenceItemId(OccurrenceItemIdType $occurrenceItemId)
 * @method OccurrenceItemIdType[] getOccurrenceItemId()
 * @method NonEmptyArrayOfBaseItemIdsType setOccurrenceItemId(array $occurrenceItemId)
 * @method NonEmptyArrayOfBaseItemIdsType addRecurringMasterItemId(RecurringMasterItemIdType $recurringMasterItemId)
 * @method RecurringMasterItemIdType[] getRecurringMasterItemId()
 * @method NonEmptyArrayOfBaseItemIdsType setRecurringMasterItemId(array $recurringMasterItemId)
 */
class NonEmptyArrayOfBaseItemIdsType extends Type
{

    /**
     * @var \garethp\ews\API\Type\ItemIdType[]
     */
    protected $itemId = null;

    /**
     * @var \garethp\ews\API\Type\OccurrenceItemIdType[]
     */
    protected $occurrenceItemId = null;

    /**
     * @var \garethp\ews\API\Type\RecurringMasterItemIdType[]
     */
    protected $recurringMasterItemId = null;
}
