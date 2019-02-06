<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing FolderChangeType
 *
 *
 * XSD Type: FolderChangeType
 *
 * @method FolderIdType getFolderId()
 * @method FolderChangeType setFolderId(FolderIdType $folderId)
 * @method DistinguishedFolderIdType getDistinguishedFolderId()
 * @method FolderChangeType setDistinguishedFolderId(DistinguishedFolderIdType $distinguishedFolderId)
 * @method NonEmptyArrayOfFolderChangeDescriptionsType getUpdates()
 * @method FolderChangeType setUpdates(NonEmptyArrayOfFolderChangeDescriptionsType $updates)
 */
class FolderChangeType extends Type
{

    /**
     * @var \garethp\ews\API\Type\FolderIdType
     */
    protected $folderId = null;

    /**
     * @var \garethp\ews\API\Type\DistinguishedFolderIdType
     */
    protected $distinguishedFolderId = null;

    /**
     * @var \garethp\ews\API\Type\NonEmptyArrayOfFolderChangeDescriptionsType
     */
    protected $updates = null;
}
