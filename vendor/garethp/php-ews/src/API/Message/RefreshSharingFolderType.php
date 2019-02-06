<?php

namespace garethp\ews\API\Message;

/**
 * Class representing RefreshSharingFolderType
 *
 *
 * XSD Type: RefreshSharingFolderType
 *
 * @method \garethp\ews\API\Type\FolderIdType getSharingFolderId()
 * @method RefreshSharingFolderType setSharingFolderId(\garethp\ews\API\Type\FolderIdType $sharingFolderId)
 */
class RefreshSharingFolderType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\FolderIdType
     */
    protected $sharingFolderId = null;
}
