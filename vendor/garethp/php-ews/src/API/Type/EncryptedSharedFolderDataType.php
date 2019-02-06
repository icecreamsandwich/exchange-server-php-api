<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing EncryptedSharedFolderDataType
 *
 *
 * XSD Type: EncryptedSharedFolderDataType
 *
 * @method EncryptedDataContainerType getToken()
 * @method EncryptedSharedFolderDataType setToken(EncryptedDataContainerType $token)
 * @method EncryptedDataContainerType getData()
 * @method EncryptedSharedFolderDataType setData(EncryptedDataContainerType $data)
 */
class EncryptedSharedFolderDataType extends Type
{

    /**
     * @var \garethp\ews\API\Type\EncryptedDataContainerType
     */
    protected $token = null;

    /**
     * @var \garethp\ews\API\Type\EncryptedDataContainerType
     */
    protected $data = null;
}
