<?php

namespace garethp\ews\API\Message;

/**
 * Class representing SendNotificationResponseMessageType
 *
 *
 * XSD Type: SendNotificationResponseMessageType
 *
 * @method \garethp\ews\API\Type\NotificationType getNotification()
 * @method SendNotificationResponseMessageType setNotification(\garethp\ews\API\Type\NotificationType $notification)
 */
class SendNotificationResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\NotificationType
     */
    protected $notification = null;
}
