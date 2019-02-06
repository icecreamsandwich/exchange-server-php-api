<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetMailTipsType
 *
 *
 * XSD Type: GetMailTipsType
 *
 * @method \garethp\ews\API\Type\EmailAddressType getSendingAs()
 * @method GetMailTipsType setSendingAs(\garethp\ews\API\Type\EmailAddressType $sendingAs)
 * @method GetMailTipsType addRecipients(\garethp\ews\API\Type\EmailAddressType $recipients)
 * @method \garethp\ews\API\Type\EmailAddressType[] getRecipients()
 * @method GetMailTipsType setRecipients(array $recipients)
 * @method GetMailTipsType addMailTipsRequested(string $mailTipsRequested)
 * @method string[] getMailTipsRequested()
 * @method GetMailTipsType setMailTipsRequested(array $mailTipsRequested)
 */
class GetMailTipsType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\EmailAddressType
     */
    protected $sendingAs = null;

    /**
     * @var \garethp\ews\API\Type\EmailAddressType[]
     */
    protected $recipients = null;

    /**
     * @var string[]
     */
    protected $mailTipsRequested = null;
}
