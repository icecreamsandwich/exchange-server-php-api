<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetStreamingEventsResponseMessageType
 *
 *
 * XSD Type: GetStreamingEventsResponseMessageType
 *
 * @method GetStreamingEventsResponseMessageType addNotifications(\garethp\ews\API\Type\NotificationType $notifications)
 * @method \garethp\ews\API\Type\NotificationType[] getNotifications()
 * @method GetStreamingEventsResponseMessageType setNotifications(array $notifications)
 * @method GetStreamingEventsResponseMessageType addErrorSubscriptionIds(string $errorSubscriptionIds)
 * @method string[] getErrorSubscriptionIds()
 * @method GetStreamingEventsResponseMessageType setErrorSubscriptionIds(array $errorSubscriptionIds)
 * @method string getConnectionStatus()
 * @method GetStreamingEventsResponseMessageType setConnectionStatus(string $connectionStatus)
 */
class GetStreamingEventsResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\NotificationType[]
     */
    protected $notifications = null;

    /**
     * @var string[]
     */
    protected $errorSubscriptionIds = null;

    /**
     * @var string
     */
    protected $connectionStatus = null;
}
