<?php

namespace garethp\ews\API\Message;

/**
 * Class representing FindConversationType
 *
 *
 * XSD Type: FindConversationType
 *
 * @method \garethp\ews\API\Type\IndexedPageViewType getIndexedPageItemView()
 * @method FindConversationType setIndexedPageItemView(\garethp\ews\API\Type\IndexedPageViewType $indexedPageItemView)
 * @method FindConversationType addSortOrder(\garethp\ews\API\Type\FieldOrderType $sortOrder)
 * @method \garethp\ews\API\Type\FieldOrderType[] getSortOrder()
 * @method FindConversationType setSortOrder(array $sortOrder)
 * @method \garethp\ews\API\Type\TargetFolderIdType getParentFolderId()
 * @method FindConversationType setParentFolderId(\garethp\ews\API\Type\TargetFolderIdType $parentFolderId)
 */
class FindConversationType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\IndexedPageViewType
     */
    protected $indexedPageItemView = null;

    /**
     * @var \garethp\ews\API\Type\FieldOrderType[]
     */
    protected $sortOrder = null;

    /**
     * @var \garethp\ews\API\Type\TargetFolderIdType
     */
    protected $parentFolderId = null;
}
