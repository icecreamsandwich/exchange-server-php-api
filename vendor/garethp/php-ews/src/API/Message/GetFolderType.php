<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetFolderType
 *
 *
 * XSD Type: GetFolderType
 *
 * @method \garethp\ews\API\Type\FolderResponseShapeType getFolderShape()
 * @method GetFolderType setFolderShape(\garethp\ews\API\Type\FolderResponseShapeType $folderShape)
 * @method \garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType getFolderIds()
 * @method GetFolderType setFolderIds(\garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType $folderIds)
 */
class GetFolderType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\FolderResponseShapeType
     */
    protected $folderShape = null;

    /**
     * @var \garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    protected $folderIds = null;
}
