<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ConstantValueType
 *
 *
 * XSD Type: ConstantValueType
 *
 * @method string getValue()
 * @method ConstantValueType setValue(string $value)
 */
class ConstantValueType extends Type
{

    /**
     * @var string
     */
    protected $value = null;
}
