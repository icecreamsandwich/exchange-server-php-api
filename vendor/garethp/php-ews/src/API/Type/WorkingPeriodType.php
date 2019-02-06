<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing WorkingPeriodType
 *
 *
 * XSD Type: WorkingPeriod
 *
 * @method WorkingPeriodType addDayOfWeek(string $dayOfWeek)
 * @method string[] getDayOfWeek()
 * @method WorkingPeriodType setDayOfWeek(array $dayOfWeek)
 * @method integer getStartTimeInMinutes()
 * @method WorkingPeriodType setStartTimeInMinutes(integer $startTimeInMinutes)
 * @method integer getEndTimeInMinutes()
 * @method WorkingPeriodType setEndTimeInMinutes(integer $endTimeInMinutes)
 */
class WorkingPeriodType extends Type
{

    /**
     * @var string[]
     */
    protected $dayOfWeek = null;

    /**
     * @var integer
     */
    protected $startTimeInMinutes = null;

    /**
     * @var integer
     */
    protected $endTimeInMinutes = null;
}
