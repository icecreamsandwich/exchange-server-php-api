<?php

namespace garethp\ews\API\Type;

/**
 * Class representing SetItemFieldType
 *
 *
 * XSD Type: SetItemFieldType
 *
 * @method ItemType getItem()
 * @method SetItemFieldType setItem(ItemType $item)
 * @method MessageType getMessage()
 * @method SetItemFieldType setMessage(MessageType $message)
 * @method CalendarItemType getCalendarItem()
 * @method SetItemFieldType setCalendarItem(CalendarItemType $calendarItem)
 * @method ContactItemType getContact()
 * @method SetItemFieldType setContact(ContactItemType $contact)
 * @method DistributionListType getDistributionList()
 * @method SetItemFieldType setDistributionList(DistributionListType $distributionList)
 * @method MeetingMessageType getMeetingMessage()
 * @method SetItemFieldType setMeetingMessage(MeetingMessageType $meetingMessage)
 * @method MeetingRequestMessageType getMeetingRequest()
 * @method SetItemFieldType setMeetingRequest(MeetingRequestMessageType $meetingRequest)
 * @method MeetingResponseMessageType getMeetingResponse()
 * @method SetItemFieldType setMeetingResponse(MeetingResponseMessageType $meetingResponse)
 * @method MeetingCancellationMessageType getMeetingCancellation()
 * @method SetItemFieldType setMeetingCancellation(MeetingCancellationMessageType $meetingCancellation)
 * @method TaskType getTask()
 * @method SetItemFieldType setTask(TaskType $task)
 * @method PostItemType getPostItem()
 * @method SetItemFieldType setPostItem(PostItemType $postItem)
 */
class SetItemFieldType extends ItemChangeDescriptionType
{

    /**
     * @var \garethp\ews\API\Type\ItemType
     */
    protected $item = null;

    /**
     * @var \garethp\ews\API\Type\MessageType
     */
    protected $message = null;

    /**
     * @var \garethp\ews\API\Type\CalendarItemType
     */
    protected $calendarItem = null;

    /**
     * @var \garethp\ews\API\Type\ContactItemType
     */
    protected $contact = null;

    /**
     * @var \garethp\ews\API\Type\DistributionListType
     */
    protected $distributionList = null;

    /**
     * @var \garethp\ews\API\Type\MeetingMessageType
     */
    protected $meetingMessage = null;

    /**
     * @var \garethp\ews\API\Type\MeetingRequestMessageType
     */
    protected $meetingRequest = null;

    /**
     * @var \garethp\ews\API\Type\MeetingResponseMessageType
     */
    protected $meetingResponse = null;

    /**
     * @var \garethp\ews\API\Type\MeetingCancellationMessageType
     */
    protected $meetingCancellation = null;

    /**
     * @var \garethp\ews\API\Type\TaskType
     */
    protected $task = null;

    /**
     * @var \garethp\ews\API\Type\PostItemType
     */
    protected $postItem = null;
}
