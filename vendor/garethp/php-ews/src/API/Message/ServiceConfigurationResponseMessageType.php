<?php

namespace garethp\ews\API\Message;

/**
 * Class representing ServiceConfigurationResponseMessageType
 *
 *
 * XSD Type: ServiceConfigurationResponseMessageType
 *
 * @method \garethp\ews\API\Type\MailTipsServiceConfigurationType getMailTipsConfiguration()
 * @method ServiceConfigurationResponseMessageType setMailTipsConfiguration(\garethp\ews\API\Type\MailTipsServiceConfigurationType $mailTipsConfiguration)
 * @method \garethp\ews\API\Type\UnifiedMessageServiceConfigurationType getUnifiedMessagingConfiguration()
 * @method ServiceConfigurationResponseMessageType setUnifiedMessagingConfiguration(\garethp\ews\API\Type\UnifiedMessageServiceConfigurationType $unifiedMessagingConfiguration)
 * @method \garethp\ews\API\Type\ProtectionRulesServiceConfigurationType getProtectionRulesConfiguration()
 * @method ServiceConfigurationResponseMessageType setProtectionRulesConfiguration(\garethp\ews\API\Type\ProtectionRulesServiceConfigurationType $protectionRulesConfiguration)
 */
class ServiceConfigurationResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\MailTipsServiceConfigurationType
     */
    protected $mailTipsConfiguration = null;

    /**
     * @var \garethp\ews\API\Type\UnifiedMessageServiceConfigurationType
     */
    protected $unifiedMessagingConfiguration = null;

    /**
     * @var \garethp\ews\API\Type\ProtectionRulesServiceConfigurationType
     */
    protected $protectionRulesConfiguration = null;
}
