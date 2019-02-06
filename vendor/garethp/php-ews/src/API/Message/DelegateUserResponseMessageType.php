<?php

namespace garethp\ews\API\Message;

/**
 * Class representing DelegateUserResponseMessageType
 *
 *
 * XSD Type: DelegateUserResponseMessageType
 *
 * @method \garethp\ews\API\Type\DelegateUserType getDelegateUser()
 * @method DelegateUserResponseMessageType setDelegateUser(\garethp\ews\API\Type\DelegateUserType $delegateUser)
 */
class DelegateUserResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\DelegateUserType
     */
    protected $delegateUser = null;
}
