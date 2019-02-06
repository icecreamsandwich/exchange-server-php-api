<?php

namespace garethp\ews\API\Message;

use garethp\ews\API\Message;

/**
 * Class representing SendNotificationResultType
 *
 *
 * XSD Type: SendNotificationResultType
 *
 * @method string getSubscriptionStatus()
 * @method SendNotificationResultType setSubscriptionStatus(string $subscriptionStatus)
 */
class SendNotificationResultType extends Message
{

    /**
     * @var string
     */
    protected $subscriptionStatus = null;
}
