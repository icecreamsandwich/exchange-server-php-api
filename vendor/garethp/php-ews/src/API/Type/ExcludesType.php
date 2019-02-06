<?php

namespace garethp\ews\API\Type;

/**
 * Class representing ExcludesType
 *
 *
 * XSD Type: ExcludesType
 *
 * @method ExcludesType addFieldURI(FieldURI $fieldURI)
 * @method FieldURI[] getFieldURI()
 * @method ExcludesType setFieldURI(array $fieldURI)
 * @method ExcludesType addIndexedFieldURI(IndexedFieldURI $indexedFieldURI)
 * @method IndexedFieldURI[] getIndexedFieldURI()
 * @method ExcludesType setIndexedFieldURI(array $indexedFieldURI)
 * @method ExcludesType addExtendedFieldURI(ExtendedFieldURI $extendedFieldURI)
 * @method ExtendedFieldURI[] getExtendedFieldURI()
 * @method ExcludesType setExtendedFieldURI(array $extendedFieldURI)
 * @method ExcludesValueType getBitmask()
 * @method ExcludesType setBitmask(ExcludesValueType $bitmask)
 */
class ExcludesType extends SearchExpressionType
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
     * @var \garethp\ews\API\Type\ExcludesValueType
     */
    protected $bitmask = null;
}
