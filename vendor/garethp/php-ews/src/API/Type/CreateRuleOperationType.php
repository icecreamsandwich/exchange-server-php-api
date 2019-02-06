<?php

namespace garethp\ews\API\Type;

/**
 * Class representing CreateRuleOperationType
 *
 *
 * XSD Type: CreateRuleOperationType
 *
 * @method RuleType getRule()
 * @method CreateRuleOperationType setRule(RuleType $rule)
 */
class CreateRuleOperationType extends RuleOperationType
{

    /**
     * @var \garethp\ews\API\Type\RuleType
     */
    protected $rule = null;
}
