<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing ReplyBodyType
 *
 *
 * XSD Type: ReplyBody
 *
 * @method \garethp\ews\API\Type\ReplyBodyType\LangAType getLang()
 * @method ReplyBodyType setLang(\garethp\ews\API\Type\ReplyBodyType\LangAType $lang)
 * @method string getMessage()
 * @method ReplyBodyType setMessage(string $message)
 */
class ReplyBodyType extends Type
{

    /**
     * @var \garethp\ews\API\Type\ReplyBodyType\LangAType
     */
    protected $lang = null;

    /**
     * @var string
     */
    protected $message = null;
}
