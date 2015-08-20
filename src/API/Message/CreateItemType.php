<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing CreateItemType
 *
 *
 * XSD Type: CreateItemType
 *
 * @method CreateItemType getMessageDisposition()
 * @method CreateItemType setMessageDisposition(string $messageDisposition)
 * @method CreateItemType getSendMeetingInvitations()
 * @method CreateItemType setSendMeetingInvitations(string $sendMeetingInvitations)
 * @method CreateItemType getSavedItemFolderId()
 * @method CreateItemType setSavedItemFolderId(\jamesiarmes\PEWS\API\Type\TargetFolderIdType $savedItemFolderId)
 * @method CreateItemType getItems()
 * @method CreateItemType setItems(\jamesiarmes\PEWS\API\Type\NonEmptyArrayOfAllItemsType $items)
 */
class CreateItemType extends BaseRequestType
{

    /**
     * @property string $messageDisposition
     */
    protected $messageDisposition = null;

    /**
     * @property string $sendMeetingInvitations
     */
    protected $sendMeetingInvitations = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\TargetFolderIdType $savedItemFolderId
     */
    protected $savedItemFolderId = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfAllItemsType $items
     */
    protected $items = null;
}