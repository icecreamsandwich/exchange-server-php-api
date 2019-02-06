<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetAttachmentType
 *
 *
 * XSD Type: GetAttachmentType
 *
 * @method \garethp\ews\API\Type\AttachmentResponseShapeType getAttachmentShape()
 * @method GetAttachmentType setAttachmentShape(\garethp\ews\API\Type\AttachmentResponseShapeType $attachmentShape)
 * @method GetAttachmentType addAttachmentIds(\garethp\ews\API\Type\RequestAttachmentIdType $attachmentIds)
 * @method \garethp\ews\API\Type\RequestAttachmentIdType[] getAttachmentIds()
 * @method GetAttachmentType setAttachmentIds(array $attachmentIds)
 */
class GetAttachmentType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\AttachmentResponseShapeType
     */
    protected $attachmentShape = null;

    /**
     * @var \garethp\ews\API\Type\RequestAttachmentIdType[]
     */
    protected $attachmentIds = null;
}
