<?php

namespace garethp\ews\API\Message;

/**
 * Class representing SetUserOofSettingsRequestType
 *
 *
 * XSD Type: SetUserOofSettingsRequest
 *
 * @method \garethp\ews\API\Type\EmailAddressType getMailbox()
 * @method SetUserOofSettingsRequestType setMailbox(\garethp\ews\API\Type\EmailAddressType $mailbox)
 * @method \garethp\ews\API\Type\UserOofSettings getUserOofSettings()
 * @method SetUserOofSettingsRequestType setUserOofSettings(\garethp\ews\API\Type\UserOofSettings $userOofSettings)
 */
class SetUserOofSettingsRequestType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\EmailAddressType
     */
    protected $mailbox = null;

    /**
     * @var \garethp\ews\API\Type\UserOofSettings
     */
    protected $userOofSettings = null;
}
