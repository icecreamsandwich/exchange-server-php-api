<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetServerTimeZonesResponseMessageType
 *
 *
 * XSD Type: GetServerTimeZonesResponseMessageType
 *
 * @method GetServerTimeZonesResponseMessageType addTimeZoneDefinitions(\garethp\ews\API\Type\TimeZoneDefinitionType $timeZoneDefinitions)
 * @method \garethp\ews\API\Type\TimeZoneDefinitionType[] getTimeZoneDefinitions()
 * @method GetServerTimeZonesResponseMessageType setTimeZoneDefinitions(array $timeZoneDefinitions)
 */
class GetServerTimeZonesResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\TimeZoneDefinitionType[]
     */
    protected $timeZoneDefinitions = null;
}
