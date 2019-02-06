<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ResolutionType
 *
 *
 * XSD Type: ResolutionType
 *
 * @method EmailAddressType getMailbox()
 * @method ResolutionType setMailbox(EmailAddressType $mailbox)
 * @method ContactItemType getContact()
 * @method ResolutionType setContact(ContactItemType $contact)
 */
class ResolutionType extends Type
{

    /**
     * @var \garethp\ews\API\Type\EmailAddressType
     */
    protected $mailbox = null;

    /**
     * @var \garethp\ews\API\Type\ContactItemType
     */
    protected $contact = null;
}
