<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing TargetFolderIdType
 *
 *
 * XSD Type: TargetFolderIdType
 *
 * @method FolderIdType getFolderId()
 * @method TargetFolderIdType setFolderId(FolderIdType $folderId)
 * @method DistinguishedFolderIdType getDistinguishedFolderId()
 * @method TargetFolderIdType setDistinguishedFolderId(DistinguishedFolderIdType $distinguishedFolderId)
 */
class TargetFolderIdType extends Type
{

    /**
     * @var \garethp\ews\API\Type\FolderIdType
     */
    protected $folderId = null;

    /**
     * @var \garethp\ews\API\Type\DistinguishedFolderIdType
     */
    protected $distinguishedFolderId = null;
}
