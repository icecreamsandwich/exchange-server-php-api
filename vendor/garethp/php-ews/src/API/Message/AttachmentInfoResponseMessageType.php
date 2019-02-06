<?php

namespace garethp\ews\API\Message;

/**
 * Class representing AttachmentInfoResponseMessageType
 *
 *
 * XSD Type: AttachmentInfoResponseMessageType
 *
 * @method \garethp\ews\API\Type\ArrayOfAttachmentsType getAttachments()
 * @method AttachmentInfoResponseMessageType setAttachments(\garethp\ews\API\Type\ArrayOfAttachmentsType $attachments)
 */
class AttachmentInfoResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\ArrayOfAttachmentsType
     */
    protected $attachments = null;
}
