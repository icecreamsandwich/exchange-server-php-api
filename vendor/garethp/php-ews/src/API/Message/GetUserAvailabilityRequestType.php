<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetUserAvailabilityRequestType
 *
 *
 * XSD Type: GetUserAvailabilityRequestType
 *
 * @method \garethp\ews\API\Type\TimeZone getTimeZone()
 * @method GetUserAvailabilityRequestType setTimeZone(\garethp\ews\API\Type\TimeZone $timeZone)
 * @method GetUserAvailabilityRequestType addMailboxDataArray(\garethp\ews\API\Type\MailboxDataType $mailboxDataArray)
 * @method \garethp\ews\API\Type\MailboxDataType[] getMailboxDataArray()
 * @method GetUserAvailabilityRequestType setMailboxDataArray(array $mailboxDataArray)
 * @method \garethp\ews\API\Type\FreeBusyViewOptions getFreeBusyViewOptions()
 * @method GetUserAvailabilityRequestType setFreeBusyViewOptions(\garethp\ews\API\Type\FreeBusyViewOptions $freeBusyViewOptions)
 * @method \garethp\ews\API\Type\SuggestionsViewOptions getSuggestionsViewOptions()
 * @method GetUserAvailabilityRequestType setSuggestionsViewOptions(\garethp\ews\API\Type\SuggestionsViewOptions $suggestionsViewOptions)
 */
class GetUserAvailabilityRequestType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\TimeZone
     */
    protected $timeZone = null;

    /**
     * @var \garethp\ews\API\Type\MailboxDataType[]
     */
    protected $mailboxDataArray = null;

    /**
     * @var \garethp\ews\API\Type\FreeBusyViewOptions
     */
    protected $freeBusyViewOptions = null;

    /**
     * @var \garethp\ews\API\Type\SuggestionsViewOptions
     */
    protected $suggestionsViewOptions = null;
}
