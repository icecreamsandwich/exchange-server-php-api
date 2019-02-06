<?php

namespace garethp\ews\API\Message;

/**
 * Class representing DeleteFolderType
 *
 *
 * XSD Type: DeleteFolderType
 *
 * @method string getDeleteType()
 * @method DeleteFolderType setDeleteType(string $deleteType)
 * @method \garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType getFolderIds()
 * @method DeleteFolderType setFolderIds(\garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType $folderIds)
 */
class DeleteFolderType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $deleteType = null;

    /**
     * @var \garethp\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    protected $folderIds = null;
}
