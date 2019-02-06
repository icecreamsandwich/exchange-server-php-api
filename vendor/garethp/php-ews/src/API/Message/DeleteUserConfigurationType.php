<?php

namespace garethp\ews\API\Message;

/**
 * Class representing DeleteUserConfigurationType
 *
 *
 * XSD Type: DeleteUserConfigurationType
 *
 * @method \garethp\ews\API\Type\UserConfigurationNameType getUserConfigurationName()
 * @method DeleteUserConfigurationType setUserConfigurationName(\garethp\ews\API\Type\UserConfigurationNameType $userConfigurationName)
 */
class DeleteUserConfigurationType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\UserConfigurationNameType
     */
    protected $userConfigurationName = null;
}
