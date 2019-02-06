<?php

namespace garethp\ews\API\Message;

/**
 * Class representing FindMailboxStatisticsByKeywordsResponseMessageType
 *
 * Response message type for the FindMailboxStatisticsByKeywords web method.
 * XSD Type: FindMailboxStatisticsByKeywordsResponseMessageType
 *
 * @method \garethp\ews\API\Type\MailboxStatisticsSearchResultType getMailboxStatisticsSearchResult()
 * @method FindMailboxStatisticsByKeywordsResponseMessageType setMailboxStatisticsSearchResult(\garethp\ews\API\Type\MailboxStatisticsSearchResultType $mailboxStatisticsSearchResult)
 */
class FindMailboxStatisticsByKeywordsResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\MailboxStatisticsSearchResultType
     */
    protected $mailboxStatisticsSearchResult = null;
}
