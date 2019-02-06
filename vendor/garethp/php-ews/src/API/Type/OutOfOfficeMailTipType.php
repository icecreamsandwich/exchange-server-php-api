<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing OutOfOfficeMailTipType
 *
 *
 * XSD Type: OutOfOfficeMailTip
 *
 * @method ReplyBodyType getReplyBody()
 * @method OutOfOfficeMailTipType setReplyBody(ReplyBodyType $replyBody)
 * @method DurationType getDuration()
 * @method OutOfOfficeMailTipType setDuration(DurationType $duration)
 */
class OutOfOfficeMailTipType extends Type
{

    /**
     * @var \garethp\ews\API\Type\ReplyBodyType
     */
    protected $replyBody = null;

    /**
     * @var \garethp\ews\API\Type\DurationType
     */
    protected $duration = null;
}
