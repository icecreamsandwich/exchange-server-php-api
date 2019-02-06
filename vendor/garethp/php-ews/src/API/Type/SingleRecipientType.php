<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing SingleRecipientType
 *
 *
 * XSD Type: SingleRecipientType
 *
 * @method EmailAddressType getMailbox()
 * @method SingleRecipientType setMailbox(EmailAddressType $mailbox)
 */
class SingleRecipientType extends Type
{

    /**
     * @var \garethp\ews\API\Type\EmailAddressType
     */
    protected $mailbox = null;
}
