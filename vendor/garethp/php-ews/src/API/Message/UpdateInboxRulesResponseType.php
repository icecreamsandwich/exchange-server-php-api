<?php

namespace garethp\ews\API\Message;

/**
 * Class representing UpdateInboxRulesResponseType
 *
 *
 * XSD Type: UpdateInboxRulesResponseType
 *
 * @method UpdateInboxRulesResponseType addRuleOperationErrors(\garethp\ews\API\Type\RuleOperationErrorType $ruleOperationErrors)
 * @method \garethp\ews\API\Type\RuleOperationErrorType[] getRuleOperationErrors()
 * @method UpdateInboxRulesResponseType setRuleOperationErrors(array $ruleOperationErrors)
 */
class UpdateInboxRulesResponseType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\RuleOperationErrorType[]
     */
    protected $ruleOperationErrors = null;
}
