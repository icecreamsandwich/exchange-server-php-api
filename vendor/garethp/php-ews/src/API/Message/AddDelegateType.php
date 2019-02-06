<?php

namespace garethp\ews\API\Message;

/**
 * Class representing AddDelegateType
 *
 *
 * XSD Type: AddDelegateType
 *
 * @method AddDelegateType addDelegateUsers(\garethp\ews\API\Type\DelegateUserType $delegateUsers)
 * @method \garethp\ews\API\Type\DelegateUserType[] getDelegateUsers()
 * @method AddDelegateType setDelegateUsers(array $delegateUsers)
 * @method string getDeliverMeetingRequests()
 * @method AddDelegateType setDeliverMeetingRequests(string $deliverMeetingRequests)
 */
class AddDelegateType extends BaseDelegateType
{

    /**
     * @var \garethp\ews\API\Type\DelegateUserType[]
     */
    protected $delegateUsers = null;

    /**
     * @var string
     */
    protected $deliverMeetingRequests = null;
}
