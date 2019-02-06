<?php

namespace garethp\ews\API\Message;

/**
 * Class representing DeleteAttachmentType
 *
 *
 * XSD Type: DeleteAttachmentType
 *
 * @method DeleteAttachmentType addAttachmentIds(\garethp\ews\API\Type\RequestAttachmentIdType $attachmentIds)
 * @method \garethp\ews\API\Type\RequestAttachmentIdType[] getAttachmentIds()
 * @method DeleteAttachmentType setAttachmentIds(array $attachmentIds)
 */
class DeleteAttachmentType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\RequestAttachmentIdType[]
     */
    protected $attachmentIds = null;
}
