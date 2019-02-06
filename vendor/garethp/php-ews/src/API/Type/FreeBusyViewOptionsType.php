<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing FreeBusyViewOptionsType
 *
 *
 * XSD Type: FreeBusyViewOptionsType
 *
 * @method DurationType getTimeWindow()
 * @method FreeBusyViewOptionsType setTimeWindow(DurationType $timeWindow)
 * @method integer getMergedFreeBusyIntervalInMinutes()
 * @method FreeBusyViewOptionsType setMergedFreeBusyIntervalInMinutes(integer $mergedFreeBusyIntervalInMinutes)
 * @method FreeBusyViewOptionsType addRequestedView(string $requestedView)
 * @method string[] getRequestedView()
 * @method FreeBusyViewOptionsType setRequestedView(array $requestedView)
 */
class FreeBusyViewOptionsType extends Type
{

    /**
     * @var \garethp\ews\API\Type\DurationType
     */
    protected $timeWindow = null;

    /**
     * @var integer
     */
    protected $mergedFreeBusyIntervalInMinutes = null;

    /**
     * @var string[]
     */
    protected $requestedView = null;
}
