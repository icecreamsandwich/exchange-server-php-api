<?php

namespace garethp\ews\API\Message;

/**
 * Class representing ExpandDLType
 *
 *
 * XSD Type: ExpandDLType
 *
 * @method \garethp\ews\API\Type\EmailAddressType getMailbox()
 * @method ExpandDLType setMailbox(\garethp\ews\API\Type\EmailAddressType $mailbox)
 */
class ExpandDLType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\EmailAddressType
     */
    protected $mailbox = null;
}
