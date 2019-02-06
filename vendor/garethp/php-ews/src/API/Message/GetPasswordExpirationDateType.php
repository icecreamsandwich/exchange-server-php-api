<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetPasswordExpirationDateType
 *
 *
 * XSD Type: GetPasswordExpirationDateType
 *
 * @method string getMailboxSmtpAddress()
 * @method GetPasswordExpirationDateType setMailboxSmtpAddress(string $mailboxSmtpAddress)
 */
class GetPasswordExpirationDateType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $mailboxSmtpAddress = null;
}
