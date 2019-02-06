<?php

namespace garethp\ews\API\Message;

/**
 * Class representing CreateFolderType
 *
 *
 * XSD Type: CreateFolderType
 *
 * @method \garethp\ews\API\Type\TargetFolderIdType getParentFolderId()
 * @method CreateFolderType setParentFolderId(\garethp\ews\API\Type\TargetFolderIdType $parentFolderId)
 * @method \garethp\ews\API\Type\NonEmptyArrayOfFoldersType getFolders()
 * @method CreateFolderType setFolders(\garethp\ews\API\Type\NonEmptyArrayOfFoldersType $folders)
 */
class CreateFolderType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\TargetFolderIdType
     */
    protected $parentFolderId = null;

    /**
     * @var \garethp\ews\API\Type\NonEmptyArrayOfFoldersType
     */
    protected $folders = null;
}
