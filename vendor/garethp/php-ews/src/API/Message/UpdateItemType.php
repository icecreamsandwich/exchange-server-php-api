<?php

namespace garethp\ews\API\Message;

/**
 * Class representing UpdateItemType
 *
 *
 * XSD Type: UpdateItemType
 *
 * @method string getConflictResolution()
 * @method UpdateItemType setConflictResolution(string $conflictResolution)
 * @method string getMessageDisposition()
 * @method UpdateItemType setMessageDisposition(string $messageDisposition)
 * @method string getSendMeetingInvitationsOrCancellations()
 * @method UpdateItemType setSendMeetingInvitationsOrCancellations(string $sendMeetingInvitationsOrCancellations)
 * @method \garethp\ews\API\Type\TargetFolderIdType getSavedItemFolderId()
 * @method UpdateItemType setSavedItemFolderId(\garethp\ews\API\Type\TargetFolderIdType $savedItemFolderId)
 * @method UpdateItemType addItemChanges(\garethp\ews\API\Type\ItemChangeType $itemChanges)
 * @method \garethp\ews\API\Type\ItemChangeType[] getItemChanges()
 * @method UpdateItemType setItemChanges(array $itemChanges)
 */
class UpdateItemType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $conflictResolution = null;

    /**
     * @var string
     */
    protected $messageDisposition = null;

    /**
     * @var string
     */
    protected $sendMeetingInvitationsOrCancellations = null;

    /**
     * @var \garethp\ews\API\Type\TargetFolderIdType
     */
    protected $savedItemFolderId = null;

    /**
     * @var \garethp\ews\API\Type\ItemChangeType[]
     */
    protected $itemChanges = null;
}
