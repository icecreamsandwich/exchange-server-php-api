<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing UserConfigurationDictionaryEntryType
 *
 *
 * XSD Type: UserConfigurationDictionaryEntryType
 *
 * @method UserConfigurationDictionaryObjectType getDictionaryKey()
 * @method UserConfigurationDictionaryEntryType setDictionaryKey(UserConfigurationDictionaryObjectType $dictionaryKey)
 * @method UserConfigurationDictionaryObjectType getDictionaryValue()
 * @method UserConfigurationDictionaryEntryType setDictionaryValue(UserConfigurationDictionaryObjectType $dictionaryValue)
 */
class UserConfigurationDictionaryEntryType extends Type
{

    /**
     * @var \garethp\ews\API\Type\UserConfigurationDictionaryObjectType
     */
    protected $dictionaryKey = null;

    /**
     * @var \garethp\ews\API\Type\UserConfigurationDictionaryObjectType
     */
    protected $dictionaryValue = null;
}
