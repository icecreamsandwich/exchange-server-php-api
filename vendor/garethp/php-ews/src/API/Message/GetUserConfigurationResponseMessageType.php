<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetUserConfigurationResponseMessageType
 *
 *
 * XSD Type: GetUserConfigurationResponseMessageType
 *
 * @method \garethp\ews\API\Type\UserConfigurationType getUserConfiguration()
 * @method GetUserConfigurationResponseMessageType setUserConfiguration(\garethp\ews\API\Type\UserConfigurationType $userConfiguration)
 */
class GetUserConfigurationResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\UserConfigurationType
     */
    protected $userConfiguration = null;
}
