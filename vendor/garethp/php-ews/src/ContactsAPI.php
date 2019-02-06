<?php

namespace garethp\ews;

use garethp\ews\API\Exception;
use garethp\ews\API\Type;

class ContactsAPI extends API
{
    /**
     * @var Type\FolderIdType
     */
    protected $folderId;

    /**
     * Pick a Contacts based on it's folder name
     *
     * @param string|null $displayName
     * @return $this
     * @throws Exception
     */
    public function pickContactsFolder($displayName = null)
    {
        if ($displayName == 'default.contacts' || $displayName == null) {
            $folder = $this->getFolderByDistinguishedId('contacts');
        } else {
            $folder = $this->getFolderByDisplayName($displayName, 'contacts');
        }

        if (!$folder) {
            throw new Exception('Folder does not exist');
        }

        $this->folderId = $folder->getFolderId();
        return $this;
    }
    
    /**
     * @return Type\FolderIdType
     */
    public function getFolderId()
    {
        if (!$this->folderId) {
            $this->folderId = $this->getFolderByDistinguishedId('contacts')->getFolderId();
        }

        return $this->folderId;
    }

    /**
     * @param Type\FolderIdType $folderId
     */
    public function setFolderId($folderId)
    {
        $this->folderId = $folderId;
    }

    /**
     * @param Type\FolderIdType $folderId
     * @param array $options
     * @return Type\ContactItemType[]
     */
    public function getContacts($folderId = null, $options = array())
    {
        if (!$folderId) {
            $folderId = $this->getFolderId();
        }

        $request = array(
            'Traversal' => 'Shallow',
            'ItemShape' => array(
                'BaseShape' => 'AllProperties'
            ),
            'ParentFolderIds' => array(
                'FolderId' => $folderId->toXmlObject()
            )
        );

        $request = array_replace_recursive($request, $options);

        $request = Type::buildFromArray($request);

        return $this->getClient()->FindItem($request);
    }

    /**
     * @param Type\ItemIdType $itemId
     * @return Type\ContactItemType
     */
    public function getContact($itemId)
    {
        return $this->getItem($itemId);
    }

    /**
     * @param $contacts
     * @param array $options
     * @return Type\ItemIdType[]
     */
    public function createContacts($contacts, $options = array())
    {
        $request = array('Contact' => $contacts);

        $defaultOptions = array(
            'MessageDisposition' => 'SaveOnly',
            'SavedItemFolderId' => array('FolderId' => $this->getFolderId()->toArray())
        );
        $options = array_replace_recursive($defaultOptions, $options);

        $result = $this->createItems($request, $options);

        if (!is_array($result)) {
            $result = array($result);
        }

        return $result;
    }

    public function updateContactItem(Type\ItemIdType $itemId, $changes)
    {
        //Create the request
        $request = array(
            'ItemChange' => array(
                'ItemId' => $itemId->toArray(),
                'Updates' => API\ItemUpdateBuilder::buildUpdateItemChanges('Contact', 'contacts', $changes)
            )
        );

        $options = array();

        $items = $this->updateItems($request, $options);

        if (!is_array($items)) {
            $items = array($items);
        }

        return $items;
    }
}
