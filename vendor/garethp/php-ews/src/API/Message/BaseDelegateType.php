<?php

namespace garethp\ews\API\Message;

/**
 * Class representing BaseDelegateType
 *
 *
 * XSD Type: BaseDelegateType
 *
 * @method \garethp\ews\API\Type\EmailAddressType getMailbox()
 * @method BaseDelegateType setMailbox(\garethp\ews\API\Type\EmailAddressType $mailbox)
 */
class BaseDelegateType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\EmailAddressType
     */
    protected $mailbox = null;
}
