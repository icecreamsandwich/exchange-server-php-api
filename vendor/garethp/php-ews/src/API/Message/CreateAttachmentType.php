<?php

namespace garethp\ews\API\Message;

/**
 * Class representing CreateAttachmentType
 *
 *
 * XSD Type: CreateAttachmentType
 *
 * @method \garethp\ews\API\Type\ItemIdType getParentItemId()
 * @method CreateAttachmentType setParentItemId(\garethp\ews\API\Type\ItemIdType $parentItemId)
 * @method \garethp\ews\API\Type\NonEmptyArrayOfAttachmentsType getAttachments()
 * @method CreateAttachmentType setAttachments(\garethp\ews\API\Type\NonEmptyArrayOfAttachmentsType $attachments)
 */
class CreateAttachmentType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\ItemIdType
     */
    protected $parentItemId = null;

    /**
     * @var \garethp\ews\API\Type\NonEmptyArrayOfAttachmentsType
     */
    protected $attachments = null;
}
