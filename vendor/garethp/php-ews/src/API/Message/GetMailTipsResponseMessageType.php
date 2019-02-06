<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetMailTipsResponseMessageType
 *
 *
 * XSD Type: GetMailTipsResponseMessageType
 *
 * @method GetMailTipsResponseMessageType addResponseMessages(MailTipsResponseMessageType $responseMessages)
 * @method MailTipsResponseMessageType[] getResponseMessages()
 * @method GetMailTipsResponseMessageType setResponseMessages(array $responseMessages)
 */
class GetMailTipsResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Message\MailTipsResponseMessageType[]
     */
    protected $responseMessages = null;
}
