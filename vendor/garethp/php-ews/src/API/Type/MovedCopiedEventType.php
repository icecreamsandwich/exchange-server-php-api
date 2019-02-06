<?php

namespace garethp\ews\API\Type;

/**
 * Class representing MovedCopiedEventType
 *
 *
 * XSD Type: MovedCopiedEventType
 *
 * @method FolderIdType getOldFolderId()
 * @method MovedCopiedEventType setOldFolderId(FolderIdType $oldFolderId)
 * @method ItemIdType getOldItemId()
 * @method MovedCopiedEventType setOldItemId(ItemIdType $oldItemId)
 * @method FolderIdType getOldParentFolderId()
 * @method MovedCopiedEventType setOldParentFolderId(FolderIdType $oldParentFolderId)
 */
class MovedCopiedEventType extends BaseObjectChangedEventType
{

    /**
     * @var \garethp\ews\API\Type\FolderIdType
     */
    protected $oldFolderId = null;

    /**
     * @var \garethp\ews\API\Type\ItemIdType
     */
    protected $oldItemId = null;

    /**
     * @var \garethp\ews\API\Type\FolderIdType
     */
    protected $oldParentFolderId = null;
}
