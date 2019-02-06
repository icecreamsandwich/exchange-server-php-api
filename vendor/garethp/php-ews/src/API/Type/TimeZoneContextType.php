<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing TimeZoneContextType
 *
 *
 * XSD Type: TimeZoneContextType
 *
 * @method TimeZoneDefinitionType getTimeZoneDefinition()
 * @method TimeZoneContextType setTimeZoneDefinition(TimeZoneDefinitionType $timeZoneDefinition)
 */
class TimeZoneContextType extends Type
{

    /**
     * @var \garethp\ews\API\Type\TimeZoneDefinitionType
     */
    protected $timeZoneDefinition = null;
}
