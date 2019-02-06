<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetEventsResponseMessageType
 *
 *
 * XSD Type: GetEventsResponseMessageType
 *
 * @method \garethp\ews\API\Type\NotificationType getNotification()
 * @method GetEventsResponseMessageType setNotification(\garethp\ews\API\Type\NotificationType $notification)
 */
class GetEventsResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\NotificationType
     */
    protected $notification = null;
}
