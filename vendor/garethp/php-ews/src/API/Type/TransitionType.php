<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing TransitionType
 *
 *
 * XSD Type: TransitionType
 *
 * @method TransitionTargetType getTo()
 * @method TransitionType setTo(TransitionTargetType $to)
 */
class TransitionType extends Type
{

    /**
     * @var \garethp\ews\API\Type\TransitionTargetType
     */
    protected $to = null;
}
