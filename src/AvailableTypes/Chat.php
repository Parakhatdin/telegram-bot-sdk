<?php


namespace Parakhatdin\Telegram\AvailableTypes;


/**
 * Class Chat
 * @package Parakhatdin\Telegram\AvailableTypes
 */
class Chat
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $type;
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $username;
    /**
     * @var string
     */
    private $first_name;
    /**
     * @var string
     */
    private $last_name;
    /**
     * @var ChatPhoto
     */
    private $photo;
    /**
     * @var string
     */
    private $bio;
    /**
     * @var string
     */
    private $description;
    /**
     * @var string
     */
    private $invite_link;
    /**
     * @var Message
     */
    private $pinned_message;
    /**
     * @var ChatPermissions
     */
    private $permissions;
    /**
     * @var int
     */
    private $slow_mode_delay;
    /**
     * @var int
     */
    private $message_auto_delete_time;
    /**
     * @var string
     */
    private $sticker_set_name;
    /**
     * @var bool
     */
    private $can_set_sticker_set;
    /**
     * @var int
     */
    private $linked_chat_id;
    /**
     * @var ChatLocation
     */
    private $location;

    /**
     * Chat constructor.
     * @param int $id
     * @param string $type
     */
    public function __construct(int $id, string $type)
    {
        $this->id = $id;
        $this->type = $type;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @param string $first_name
     */
    public function setFirstName(string $first_name): void
    {
        $this->first_name = $first_name;
    }

    /**
     * @param string $last_name
     */
    public function setLastName(string $last_name): void
    {
        $this->last_name = $last_name;
    }

    /**
     * @param ChatPhoto $photo
     */
    public function setPhoto(ChatPhoto $photo): void
    {
        $this->photo = $photo;
    }

    /**
     * @param string $bio
     */
    public function setBio(string $bio): void
    {
        $this->bio = $bio;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @param string $invite_link
     */
    public function setInviteLink(string $invite_link): void
    {
        $this->invite_link = $invite_link;
    }

    /**
     * @param Message $pinned_message
     */
    public function setPinnedMessage(Message $pinned_message): void
    {
        $this->pinned_message = $pinned_message;
    }

    /**
     * @param ChatPermissions $permissions
     */
    public function setPermissions(ChatPermissions $permissions): void
    {
        $this->permissions = $permissions;
    }

    /**
     * @param int $slow_mode_delay
     */
    public function setSlowModeDelay(int $slow_mode_delay): void
    {
        $this->slow_mode_delay = $slow_mode_delay;
    }

    /**
     * @param int $message_auto_delete_time
     */
    public function setMessageAutoDeleteTime(int $message_auto_delete_time): void
    {
        $this->message_auto_delete_time = $message_auto_delete_time;
    }

    /**
     * @param string $sticker_set_name
     */
    public function setStickerSetName(string $sticker_set_name): void
    {
        $this->sticker_set_name = $sticker_set_name;
    }

    /**
     * @param bool $can_set_sticker_set
     */
    public function setCanSetStickerSet(bool $can_set_sticker_set): void
    {
        $this->can_set_sticker_set = $can_set_sticker_set;
    }

    /**
     * @param int $linked_chat_id
     */
    public function setLinkedChatId(int $linked_chat_id): void
    {
        $this->linked_chat_id = $linked_chat_id;
    }

    /**
     * @param ChatLocation $location
     */
    public function setLocation(ChatLocation $location): void
    {
        $this->location = $location;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->first_name;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->last_name;
    }

    /**
     * @return ChatPhoto
     */
    public function getPhoto(): ChatPhoto
    {
        return $this->photo;
    }

    /**
     * @return string
     */
    public function getBio(): string
    {
        return $this->bio;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getInviteLink(): string
    {
        return $this->invite_link;
    }

    /**
     * @return Message
     */
    public function getPinnedMessage(): Message
    {
        return $this->pinned_message;
    }

    /**
     * @return ChatPermissions
     */
    public function getPermissions(): ChatPermissions
    {
        return $this->permissions;
    }

    /**
     * @return int
     */
    public function getSlowModeDelay(): int
    {
        return $this->slow_mode_delay;
    }

    /**
     * @return int
     */
    public function getMessageAutoDeleteTime(): int
    {
        return $this->message_auto_delete_time;
    }

    /**
     * @return string
     */
    public function getStickerSetName(): string
    {
        return $this->sticker_set_name;
    }

    /**
     * @return bool
     */
    public function isCanSetStickerSet(): bool
    {
        return $this->can_set_sticker_set;
    }

    /**
     * @return int
     */
    public function getLinkedChatId(): int
    {
        return $this->linked_chat_id;
    }

    /**
     * @return ChatLocation
     */
    public function getLocation(): ChatLocation
    {
        return $this->location;
    }



}