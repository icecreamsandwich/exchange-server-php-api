<?php

namespace garethp\ews\API\Message;

/**
 * Class representing SubscribeType
 *
 *
 * XSD Type: SubscribeType
 *
 * @method \garethp\ews\API\Type\PullSubscriptionRequestType getPullSubscriptionRequest()
 * @method SubscribeType setPullSubscriptionRequest(\garethp\ews\API\Type\PullSubscriptionRequestType $pullSubscriptionRequest)
 * @method \garethp\ews\API\Type\PushSubscriptionRequestType getPushSubscriptionRequest()
 * @method SubscribeType setPushSubscriptionRequest(\garethp\ews\API\Type\PushSubscriptionRequestType $pushSubscriptionRequest)
 * @method \garethp\ews\API\Type\StreamingSubscriptionRequestType getStreamingSubscriptionRequest()
 * @method SubscribeType setStreamingSubscriptionRequest(\garethp\ews\API\Type\StreamingSubscriptionRequestType $streamingSubscriptionRequest)
 */
class SubscribeType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\PullSubscriptionRequestType
     */
    protected $pullSubscriptionRequest = null;

    /**
     * @var \garethp\ews\API\Type\PushSubscriptionRequestType
     */
    protected $pushSubscriptionRequest = null;

    /**
     * @var \garethp\ews\API\Type\StreamingSubscriptionRequestType
     */
    protected $streamingSubscriptionRequest = null;
}
