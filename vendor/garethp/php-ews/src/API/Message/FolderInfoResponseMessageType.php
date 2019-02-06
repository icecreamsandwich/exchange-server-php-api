<?php

namespace garethp\ews\API\Message;

/**
 * Class representing FolderInfoResponseMessageType
 *
 *
 * XSD Type: FolderInfoResponseMessageType
 *
 * @method \garethp\ews\API\Type\ArrayOfFoldersType getFolders()
 * @method FolderInfoResponseMessageType setFolders(\garethp\ews\API\Type\ArrayOfFoldersType $folders)
 */
class FolderInfoResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\ArrayOfFoldersType
     */
    protected $folders = null;
}
