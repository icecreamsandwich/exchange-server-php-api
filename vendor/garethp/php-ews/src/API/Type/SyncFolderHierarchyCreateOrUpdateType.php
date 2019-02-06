<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing SyncFolderHierarchyCreateOrUpdateType
 *
 *
 * XSD Type: SyncFolderHierarchyCreateOrUpdateType
 *
 * @method FolderType getFolder()
 * @method SyncFolderHierarchyCreateOrUpdateType setFolder(FolderType $folder)
 * @method CalendarFolderType getCalendarFolder()
 * @method SyncFolderHierarchyCreateOrUpdateType setCalendarFolder(CalendarFolderType $calendarFolder)
 * @method ContactsFolderType getContactsFolder()
 * @method SyncFolderHierarchyCreateOrUpdateType setContactsFolder(ContactsFolderType $contactsFolder)
 * @method SearchFolderType getSearchFolder()
 * @method SyncFolderHierarchyCreateOrUpdateType setSearchFolder(SearchFolderType $searchFolder)
 * @method TasksFolderType getTasksFolder()
 * @method SyncFolderHierarchyCreateOrUpdateType setTasksFolder(TasksFolderType $tasksFolder)
 */
class SyncFolderHierarchyCreateOrUpdateType extends Type
{

    /**
     * @var \garethp\ews\API\Type\FolderType
     */
    protected $folder = null;

    /**
     * @var \garethp\ews\API\Type\CalendarFolderType
     */
    protected $calendarFolder = null;

    /**
     * @var \garethp\ews\API\Type\ContactsFolderType
     */
    protected $contactsFolder = null;

    /**
     * @var \garethp\ews\API\Type\SearchFolderType
     */
    protected $searchFolder = null;

    /**
     * @var \garethp\ews\API\Type\TasksFolderType
     */
    protected $tasksFolder = null;
}
