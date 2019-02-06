<?php

namespace garethp\ews\API\Message;

/**
 * Class representing ApplyConversationActionType
 *
 *
 * XSD Type: ApplyConversationActionType
 *
 * @method ApplyConversationActionType addConversationActions(\garethp\ews\API\Type\ConversationActionType $conversationActions)
 * @method \garethp\ews\API\Type\ConversationActionType[] getConversationActions()
 * @method ApplyConversationActionType setConversationActions(array $conversationActions)
 */
class ApplyConversationActionType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\ConversationActionType[]
     */
    protected $conversationActions = null;
}
