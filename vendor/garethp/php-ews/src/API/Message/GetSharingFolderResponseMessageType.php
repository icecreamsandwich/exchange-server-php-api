<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetSharingFolderResponseMessageType
 *
 *
 * XSD Type: GetSharingFolderResponseMessageType
 *
 * @method \garethp\ews\API\Type\FolderIdType getSharingFolderId()
 * @method GetSharingFolderResponseMessageType setSharingFolderId(\garethp\ews\API\Type\FolderIdType $sharingFolderId)
 */
class GetSharingFolderResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\FolderIdType
     */
    protected $sharingFolderId = null;
}
