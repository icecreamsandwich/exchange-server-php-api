<?php

namespace garethp\ews\API\Message;

/**
 * Class representing CreateManagedFolderRequestType
 *
 *
 * XSD Type: CreateManagedFolderRequestType
 *
 * @method CreateManagedFolderRequestType addFolderNames(string $folderNames)
 * @method string[] getFolderNames()
 * @method CreateManagedFolderRequestType setFolderNames(array $folderNames)
 * @method \garethp\ews\API\Type\EmailAddressType getMailbox()
 * @method CreateManagedFolderRequestType setMailbox(\garethp\ews\API\Type\EmailAddressType $mailbox)
 */
class CreateManagedFolderRequestType extends BaseRequestType
{

    /**
     * @var string[]
     */
    protected $folderNames = null;

    /**
     * @var \garethp\ews\API\Type\EmailAddressType
     */
    protected $mailbox = null;
}
