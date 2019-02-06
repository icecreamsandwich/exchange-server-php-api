<?php

namespace garethp\ews\API\Message;

use garethp\ews\API\Message;

/**
 * Class representing FreeBusyResponseType
 *
 *
 * XSD Type: FreeBusyResponseType
 *
 * @method ResponseMessageType getResponseMessage()
 * @method FreeBusyResponseType setResponseMessage(ResponseMessageType $responseMessage)
 * @method \garethp\ews\API\Type\FreeBusyViewType getFreeBusyView()
 * @method FreeBusyResponseType setFreeBusyView(\garethp\ews\API\Type\FreeBusyViewType $freeBusyView)
 */
class FreeBusyResponseType extends Message
{

    /**
     * @var \garethp\ews\API\Message\ResponseMessageType
     */
    protected $responseMessage = null;

    /**
     * @var \garethp\ews\API\Type\FreeBusyViewType
     */
    protected $freeBusyView = null;
}
