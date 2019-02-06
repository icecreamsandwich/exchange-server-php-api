<?php

namespace garethp\ews\API\Message;

use garethp\ews\API\Message;

/**
 * Class representing SuggestionsResponseType
 *
 *
 * XSD Type: SuggestionsResponseType
 *
 * @method ResponseMessageType getResponseMessage()
 * @method SuggestionsResponseType setResponseMessage(ResponseMessageType $responseMessage)
 * @method SuggestionsResponseType addSuggestionDayResultArray(\garethp\ews\API\Type\SuggestionDayResultType $suggestionDayResultArray)
 * @method \garethp\ews\API\Type\SuggestionDayResultType[] getSuggestionDayResultArray()
 * @method SuggestionsResponseType setSuggestionDayResultArray(array $suggestionDayResultArray)
 */
class SuggestionsResponseType extends Message
{

    /**
     * @var \garethp\ews\API\Message\ResponseMessageType
     */
    protected $responseMessage = null;

    /**
     * @var \garethp\ews\API\Type\SuggestionDayResultType[]
     */
    protected $suggestionDayResultArray = null;
}
