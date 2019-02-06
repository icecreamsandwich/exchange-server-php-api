<?php

namespace garethp\ews\API\Message;

/**
 * Class representing SyncFolderHierarchyType
 *
 *
 * XSD Type: SyncFolderHierarchyType
 *
 * @method \garethp\ews\API\Type\FolderResponseShapeType getFolderShape()
 * @method SyncFolderHierarchyType setFolderShape(\garethp\ews\API\Type\FolderResponseShapeType $folderShape)
 * @method \garethp\ews\API\Type\TargetFolderIdType getSyncFolderId()
 * @method SyncFolderHierarchyType setSyncFolderId(\garethp\ews\API\Type\TargetFolderIdType $syncFolderId)
 * @method string getSyncState()
 * @method SyncFolderHierarchyType setSyncState(string $syncState)
 */
class SyncFolderHierarchyType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\FolderResponseShapeType
     */
    protected $folderShape = null;

    /**
     * @var \garethp\ews\API\Type\TargetFolderIdType
     */
    protected $syncFolderId = null;

    /**
     * @var string
     */
    protected $syncState = null;
}
