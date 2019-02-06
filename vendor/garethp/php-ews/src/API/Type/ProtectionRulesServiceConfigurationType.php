<?php

namespace garethp\ews\API\Type;

/**
 * Class representing ProtectionRulesServiceConfigurationType
 *
 *
 * XSD Type: ProtectionRulesServiceConfiguration
 *
 * @method integer getRefreshInterval()
 * @method ProtectionRulesServiceConfigurationType setRefreshInterval(integer $refreshInterval)
 * @method ProtectionRulesServiceConfigurationType addRules(ProtectionRuleType $rules)
 * @method ProtectionRuleType[] getRules()
 * @method ProtectionRulesServiceConfigurationType setRules(array $rules)
 * @method ProtectionRulesServiceConfigurationType addInternalDomains(SmtpDomainType $internalDomains)
 * @method SmtpDomainType[] getInternalDomains()
 * @method ProtectionRulesServiceConfigurationType setInternalDomains(array $internalDomains)
 */
class ProtectionRulesServiceConfigurationType extends ServiceConfigurationType
{

    /**
     * @var integer
     */
    protected $refreshInterval = null;

    /**
     * @var \garethp\ews\API\Type\ProtectionRuleType[]
     */
    protected $rules = null;

    /**
     * @var \garethp\ews\API\Type\SmtpDomainType[]
     */
    protected $internalDomains = null;
}
