<?php

namespace garethp\ews\API\Message;

/**
 * Class representing SyncFolderItemsType
 *
 *
 * XSD Type: SyncFolderItemsType
 *
 * @method \garethp\ews\API\Type\ItemResponseShapeType getItemShape()
 * @method SyncFolderItemsType setItemShape(\garethp\ews\API\Type\ItemResponseShapeType $itemShape)
 * @method \garethp\ews\API\Type\TargetFolderIdType getSyncFolderId()
 * @method SyncFolderItemsType setSyncFolderId(\garethp\ews\API\Type\TargetFolderIdType $syncFolderId)
 * @method string getSyncState()
 * @method SyncFolderItemsType setSyncState(string $syncState)
 * @method SyncFolderItemsType addIgnore(\garethp\ews\API\Type\ItemIdType $ignore)
 * @method \garethp\ews\API\Type\ItemIdType[] getIgnore()
 * @method SyncFolderItemsType setIgnore(array $ignore)
 * @method integer getMaxChangesReturned()
 * @method SyncFolderItemsType setMaxChangesReturned(integer $maxChangesReturned)
 * @method string getSyncScope()
 * @method SyncFolderItemsType setSyncScope(string $syncScope)
 */
class SyncFolderItemsType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\ItemResponseShapeType
     */
    protected $itemShape = null;

    /**
     * @var \garethp\ews\API\Type\TargetFolderIdType
     */
    protected $syncFolderId = null;

    /**
     * @var string
     */
    protected $syncState = null;

    /**
     * @var \garethp\ews\API\Type\ItemIdType[]
     */
    protected $ignore = null;

    /**
     * @var integer
     */
    protected $maxChangesReturned = null;

    /**
     * @var string
     */
    protected $syncScope = null;
}
