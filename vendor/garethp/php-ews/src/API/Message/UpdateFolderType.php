<?php

namespace garethp\ews\API\Message;

/**
 * Class representing UpdateFolderType
 *
 *
 * XSD Type: UpdateFolderType
 *
 * @method UpdateFolderType addFolderChanges(\garethp\ews\API\Type\FolderChangeType $folderChanges)
 * @method \garethp\ews\API\Type\FolderChangeType[] getFolderChanges()
 * @method UpdateFolderType setFolderChanges(array $folderChanges)
 */
class UpdateFolderType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\FolderChangeType[]
     */
    protected $folderChanges = null;
}
