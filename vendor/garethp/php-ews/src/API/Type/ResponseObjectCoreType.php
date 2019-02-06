<?php

namespace garethp\ews\API\Type;

/**
 * Class representing ResponseObjectCoreType
 *
 * Internal abstract base type for reply objects.
 *  Should not appear in client code
 * XSD Type: ResponseObjectCoreType
 *
 * @method ItemIdType getReferenceItemId()
 * @method ResponseObjectCoreType setReferenceItemId(ItemIdType $referenceItemId)
 */
class ResponseObjectCoreType extends MessageType
{

    /**
     * @var \garethp\ews\API\Type\ItemIdType
     */
    protected $referenceItemId = null;
}
