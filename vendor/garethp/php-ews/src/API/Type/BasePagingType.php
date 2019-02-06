<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing BasePagingType
 *
 *
 * XSD Type: BasePagingType
 *
 * @method integer getMaxEntriesReturned()
 * @method BasePagingType setMaxEntriesReturned(integer $maxEntriesReturned)
 */
class BasePagingType extends Type
{

    /**
     * @var integer
     */
    protected $maxEntriesReturned = null;
}
