<?php

namespace garethp\ews\API\Message;

/**
 * Class representing FindItemResponseMessageType
 *
 *
 * XSD Type: FindItemResponseMessageType
 *
 * @method \garethp\ews\API\Type\FindItemParentType getRootFolder()
 * @method FindItemResponseMessageType setRootFolder(\garethp\ews\API\Type\FindItemParentType $rootFolder)
 */
class FindItemResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\FindItemParentType
     */
    protected $rootFolder = null;
}
