<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing FolderResponseShapeType
 *
 *
 * XSD Type: FolderResponseShapeType
 *
 * @method string getBaseShape()
 * @method FolderResponseShapeType setBaseShape(string $baseShape)
 * @method NonEmptyArrayOfPathsToElementType getAdditionalProperties()
 * @method FolderResponseShapeType setAdditionalProperties(NonEmptyArrayOfPathsToElementType $additionalProperties)
 */
class FolderResponseShapeType extends Type
{

    /**
     * @var string
     */
    protected $baseShape = null;

    /**
     * @var \garethp\ews\API\Type\NonEmptyArrayOfPathsToElementType
     */
    protected $additionalProperties = null;
}
