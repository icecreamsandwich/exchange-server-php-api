<?php

namespace garethp\ews\API\Message;

/**
 * Class representing RemoveDelegateType
 *
 *
 * XSD Type: RemoveDelegateType
 *
 * @method RemoveDelegateType addUserIds(\garethp\ews\API\Type\UserIdType $userIds)
 * @method \garethp\ews\API\Type\UserIdType[] getUserIds()
 * @method RemoveDelegateType setUserIds(array $userIds)
 */
class RemoveDelegateType extends BaseDelegateType
{

    /**
     * @var \garethp\ews\API\Type\UserIdType[]
     */
    protected $userIds = null;
}
