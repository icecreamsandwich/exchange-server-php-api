<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing CalendarPermissionSetType
 *
 * The set of permissions on a folder
 * XSD Type: CalendarPermissionSetType
 *
 * @method CalendarPermissionSetType addCalendarPermissions(CalendarPermissionType $calendarPermissions)
 * @method CalendarPermissionType[] getCalendarPermissions()
 * @method CalendarPermissionSetType setCalendarPermissions(array $calendarPermissions)
 * @method CalendarPermissionSetType addUnknownEntries(string $unknownEntries)
 * @method string[] getUnknownEntries()
 * @method CalendarPermissionSetType setUnknownEntries(array $unknownEntries)
 */
class CalendarPermissionSetType extends Type
{

    /**
     * @var \garethp\ews\API\Type\CalendarPermissionType[]
     */
    protected $calendarPermissions = null;

    /**
     * @var string[]
     */
    protected $unknownEntries = null;
}
