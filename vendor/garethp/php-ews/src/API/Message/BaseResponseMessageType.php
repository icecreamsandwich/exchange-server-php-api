<?php

namespace garethp\ews\API\Message;

use garethp\ews\API\Message;

/**
 * Class representing BaseResponseMessageType
 *
 *
 * XSD Type: BaseResponseMessageType
 *
 * @method ArrayOfResponseMessagesType getResponseMessages()
 * @method BaseResponseMessageType setResponseMessages(ArrayOfResponseMessagesType $responseMessages)
 */
class BaseResponseMessageType extends Message
{

    /**
     * @var \garethp\ews\API\Message\ArrayOfResponseMessagesType
     */
    protected $responseMessages = null;
}
