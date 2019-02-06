<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetRoomsType
 *
 *
 * XSD Type: GetRoomsType
 *
 * @method \garethp\ews\API\Type\EmailAddressType getRoomList()
 * @method GetRoomsType setRoomList(\garethp\ews\API\Type\EmailAddressType $roomList)
 */
class GetRoomsType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\EmailAddressType
     */
    protected $roomList = null;
}
