<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing AttachmentResponseShapeType
 *
 *
 * XSD Type: AttachmentResponseShapeType
 *
 * @method boolean isIncludeMimeContent()
 * @method boolean getIncludeMimeContent()
 * @method AttachmentResponseShapeType setIncludeMimeContent(boolean $includeMimeContent)
 * @method string getBodyType()
 * @method AttachmentResponseShapeType setBodyType(string $bodyType)
 * @method boolean isFilterHtmlContent()
 * @method boolean getFilterHtmlContent()
 * @method AttachmentResponseShapeType setFilterHtmlContent(boolean $filterHtmlContent)
 * @method NonEmptyArrayOfPathsToElementType getAdditionalProperties()
 * @method AttachmentResponseShapeType setAdditionalProperties(NonEmptyArrayOfPathsToElementType $additionalProperties)
 */
class AttachmentResponseShapeType extends Type
{

    /**
     * @var boolean
     */
    protected $includeMimeContent = null;

    /**
     * @var string
     */
    protected $bodyType = null;

    /**
     * @var boolean
     */
    protected $filterHtmlContent = null;

    /**
     * @var \garethp\ews\API\Type\NonEmptyArrayOfPathsToElementType
     */
    protected $additionalProperties = null;
}
