<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ProtectionRuleActionType
 *
 *
 * XSD Type: ProtectionRuleActionType
 *
 * @method string getName()
 * @method ProtectionRuleActionType setName(string $name)
 * @method ProtectionRuleActionType addArgument(ProtectionRuleArgumentType $argument)
 * @method ProtectionRuleArgumentType[] getArgument()
 * @method ProtectionRuleActionType setArgument(array $argument)
 */
class ProtectionRuleActionType extends Type
{

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var \garethp\ews\API\Type\ProtectionRuleArgumentType[]
     */
    protected $argument = null;
}
