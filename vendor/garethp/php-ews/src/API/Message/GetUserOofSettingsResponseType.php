<?php

namespace garethp\ews\API\Message;

use garethp\ews\API\Message;

/**
 * Class representing GetUserOofSettingsResponseType
 *
 *
 * XSD Type: GetUserOofSettingsResponse
 *
 * @method ResponseMessageType getResponseMessage()
 * @method GetUserOofSettingsResponseType setResponseMessage(ResponseMessageType $responseMessage)
 * @method \garethp\ews\API\Type\OofSettings getOofSettings()
 * @method GetUserOofSettingsResponseType setOofSettings(\garethp\ews\API\Type\OofSettings $oofSettings)
 * @method string getAllowExternalOof()
 * @method GetUserOofSettingsResponseType setAllowExternalOof(string $allowExternalOof)
 */
class GetUserOofSettingsResponseType extends Message
{

    /**
     * @var \garethp\ews\API\Message\ResponseMessageType
     */
    protected $responseMessage = null;

    /**
     * @var \garethp\ews\API\Type\OofSettings
     */
    protected $oofSettings = null;

    /**
     * @var string
     */
    protected $allowExternalOof = null;
}
