<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing SearchParametersType
 *
 *
 * XSD Type: SearchParametersType
 *
 * @method string getTraversal()
 * @method SearchParametersType setTraversal(string $traversal)
 * @method RestrictionType getRestriction()
 * @method SearchParametersType setRestriction(RestrictionType $restriction)
 * @method NonEmptyArrayOfBaseFolderIdsType getBaseFolderIds()
 * @method SearchParametersType setBaseFolderIds(NonEmptyArrayOfBaseFolderIdsType $baseFolderIds)
 */
class SearchParametersType extends Type
{

    /**
     * @var string
     */
    protected $traversal = null;

    /**
     * @var \garethp\ews\API\Type\RestrictionType
     */
    protected $restriction = null;

    /**
     * @var \garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    protected $baseFolderIds = null;
}
