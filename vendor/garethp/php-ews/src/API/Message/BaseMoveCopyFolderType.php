<?php

namespace garethp\ews\API\Message;

/**
 * Class representing BaseMoveCopyFolderType
 *
 *
 * XSD Type: BaseMoveCopyFolderType
 *
 * @method \garethp\ews\API\Type\TargetFolderIdType getToFolderId()
 * @method BaseMoveCopyFolderType setToFolderId(\garethp\ews\API\Type\TargetFolderIdType $toFolderId)
 * @method \garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType getFolderIds()
 * @method BaseMoveCopyFolderType setFolderIds(\garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType $folderIds)
 */
class BaseMoveCopyFolderType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\TargetFolderIdType
     */
    protected $toFolderId = null;

    /**
     * @var \garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    protected $folderIds = null;
}
