<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing FreeBusyViewType
 *
 *
 * XSD Type: FreeBusyView
 *
 * @method FreeBusyViewType addFreeBusyViewType(string $freeBusyViewType)
 * @method string[] getFreeBusyViewType()
 * @method FreeBusyViewType setFreeBusyViewType(array $freeBusyViewType)
 * @method string getMergedFreeBusy()
 * @method FreeBusyViewType setMergedFreeBusy(string $mergedFreeBusy)
 * @method FreeBusyViewType addCalendarEventArray(CalendarEventType $calendarEventArray)
 * @method CalendarEventType[] getCalendarEventArray()
 * @method FreeBusyViewType setCalendarEventArray(array $calendarEventArray)
 * @method WorkingHoursType getWorkingHours()
 * @method FreeBusyViewType setWorkingHours(WorkingHoursType $workingHours)
 */
class FreeBusyViewType extends Type
{

    /**
     * @var string[]
     */
    protected $freeBusyViewType = null;

    /**
     * @var string
     */
    protected $mergedFreeBusy = null;

    /**
     * @var \garethp\ews\API\Type\CalendarEventType[]
     */
    protected $calendarEventArray = null;

    /**
     * @var \garethp\ews\API\Type\WorkingHoursType
     */
    protected $workingHours = null;
}
