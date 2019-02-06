<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetRoomListsResponseMessageType
 *
 *
 * XSD Type: GetRoomListsResponseMessageType
 *
 * @method GetRoomListsResponseMessageType addRoomLists(\garethp\ews\API\Type\EmailAddressType $roomLists)
 * @method \garethp\ews\API\Type\EmailAddressType[] getRoomLists()
 * @method GetRoomListsResponseMessageType setRoomLists(array $roomLists)
 */
class GetRoomListsResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\EmailAddressType[]
     */
    protected $roomLists = null;
}
