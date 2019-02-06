<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetSharingMetadataResponseMessageType
 *
 *
 * XSD Type: GetSharingMetadataResponseMessageType
 *
 * @method GetSharingMetadataResponseMessageType addEncryptedSharedFolderDataCollection(\garethp\ews\API\Type\EncryptedSharedFolderDataType $encryptedSharedFolderDataCollection)
 * @method \garethp\ews\API\Type\EncryptedSharedFolderDataType[] getEncryptedSharedFolderDataCollection()
 * @method GetSharingMetadataResponseMessageType setEncryptedSharedFolderDataCollection(array $encryptedSharedFolderDataCollection)
 * @method GetSharingMetadataResponseMessageType addInvalidRecipients(\garethp\ews\API\Type\InvalidRecipientType $invalidRecipients)
 * @method \garethp\ews\API\Type\InvalidRecipientType[] getInvalidRecipients()
 * @method GetSharingMetadataResponseMessageType setInvalidRecipients(array $invalidRecipients)
 */
class GetSharingMetadataResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\EncryptedSharedFolderDataType[]
     */
    protected $encryptedSharedFolderDataCollection = null;

    /**
     * @var \garethp\ews\API\Type\InvalidRecipientType[]
     */
    protected $invalidRecipients = null;
}
