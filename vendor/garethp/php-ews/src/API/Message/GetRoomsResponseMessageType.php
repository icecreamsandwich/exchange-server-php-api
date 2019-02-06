<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetRoomsResponseMessageType
 *
 *
 * XSD Type: GetRoomsResponseMessageType
 *
 * @method GetRoomsResponseMessageType addRooms(\garethp\ews\API\Type\RoomType $rooms)
 * @method \garethp\ews\API\Type\RoomType[] getRooms()
 * @method GetRoomsResponseMessageType setRooms(array $rooms)
 */
class GetRoomsResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\RoomType[]
     */
    protected $rooms = null;
}
