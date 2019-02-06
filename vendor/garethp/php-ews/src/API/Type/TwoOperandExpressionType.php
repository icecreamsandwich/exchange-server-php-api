<?php

namespace garethp\ews\API\Type;

/**
 * Class representing TwoOperandExpressionType
 *
 *
 * XSD Type: TwoOperandExpressionType
 *
 * @method TwoOperandExpressionType addFieldURI(FieldURI $fieldURI)
 * @method FieldURI[] getFieldURI()
 * @method TwoOperandExpressionType setFieldURI(array $fieldURI)
 * @method TwoOperandExpressionType addIndexedFieldURI(IndexedFieldURI $indexedFieldURI)
 * @method IndexedFieldURI[] getIndexedFieldURI()
 * @method TwoOperandExpressionType setIndexedFieldURI(array $indexedFieldURI)
 * @method TwoOperandExpressionType addExtendedFieldURI(ExtendedFieldURI $extendedFieldURI)
 * @method ExtendedFieldURI[] getExtendedFieldURI()
 * @method TwoOperandExpressionType setExtendedFieldURI(array $extendedFieldURI)
 * @method FieldURIOrConstantType getFieldURIOrConstant()
 * @method TwoOperandExpressionType setFieldURIOrConstant(FieldURIOrConstantType $fieldURIOrConstant)
 */
class TwoOperandExpressionType extends SearchExpressionType
{

    /**
     * @var \garethp\ews\API\Type\FieldURI[]
     */
    protected $fieldURI = null;

    /**
     * @var \garethp\ews\API\Type\IndexedFieldURI[]
     */
    protected $indexedFieldURI = null;

    /**
     * @var \garethp\ews\API\Type\ExtendedFieldURI[]
     */
    protected $extendedFieldURI = null;

    /**
     * @var \garethp\ews\API\Type\FieldURIOrConstantType
     */
    protected $fieldURIOrConstant = null;
}
