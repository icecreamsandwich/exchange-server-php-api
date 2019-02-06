<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing SyncFolderHierarchyChangesType
 *
 *
 * XSD Type: SyncFolderHierarchyChangesType
 *
 * @method SyncFolderHierarchyChangesType addCreate(SyncFolderHierarchyCreateOrUpdateType $create)
 * @method SyncFolderHierarchyCreateOrUpdateType[] getCreate()
 * @method SyncFolderHierarchyChangesType setCreate(array $create)
 * @method SyncFolderHierarchyChangesType addUpdate(SyncFolderHierarchyCreateOrUpdateType $update)
 * @method SyncFolderHierarchyCreateOrUpdateType[] getUpdate()
 * @method SyncFolderHierarchyChangesType setUpdate(array $update)
 * @method SyncFolderHierarchyChangesType addDelete(SyncFolderHierarchyDeleteType $delete)
 * @method SyncFolderHierarchyDeleteType[] getDelete()
 * @method SyncFolderHierarchyChangesType setDelete(array $delete)
 */
class SyncFolderHierarchyChangesType extends Type
{

    /**
     * @var \garethp\ews\API\Type\SyncFolderHierarchyCreateOrUpdateType[]
     */
    protected $create = null;

    /**
     * @var \garethp\ews\API\Type\SyncFolderHierarchyCreateOrUpdateType[]
     */
    protected $update = null;

    /**
     * @var \garethp\ews\API\Type\SyncFolderHierarchyDeleteType[]
     */
    protected $delete = null;
}
