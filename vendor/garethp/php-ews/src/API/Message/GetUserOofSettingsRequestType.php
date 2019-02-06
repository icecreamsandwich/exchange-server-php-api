<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetUserOofSettingsRequestType
 *
 *
 * XSD Type: GetUserOofSettingsRequest
 *
 * @method \garethp\ews\API\Type\EmailAddressType getMailbox()
 * @method GetUserOofSettingsRequestType setMailbox(\garethp\ews\API\Type\EmailAddressType $mailbox)
 */
class GetUserOofSettingsRequestType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\EmailAddressType
     */
    protected $mailbox = null;
}
