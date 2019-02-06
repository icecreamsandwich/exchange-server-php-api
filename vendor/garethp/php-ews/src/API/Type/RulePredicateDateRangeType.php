<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing RulePredicateDateRangeType
 *
 * Date range type used for the WithinDateRange rule predicate.
 * XSD Type: RulePredicateDateRangeType
 *
 * @method \DateTime getStartDateTime()
 * @method RulePredicateDateRangeType setStartDateTime(\DateTime $startDateTime)
 * @method \DateTime getEndDateTime()
 * @method RulePredicateDateRangeType setEndDateTime(\DateTime $endDateTime)
 */
class RulePredicateDateRangeType extends Type
{

    /**
     * @var \DateTime
     */
    protected $startDateTime = null;

    protected $_typeMap = array(
        'startDateTime' => 'dateTime',
        'endDateTime' => 'dateTime',
    );

    /**
     * @var \DateTime
     */
    protected $endDateTime = null;
}
