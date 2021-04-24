<?php


namespace Parakhatdin\Telegram\AvailableTypes;


/**
 * Class ChatMember
 * @package Parakhatdin\Telegram\AvailableTypes
 */
class ChatMember
{
    /**
     * @var User
     */
    private $user;
    /**
     * @var string
     */
    private $status;
    /**
     * @var string
     */
    private $custom_title;
    /**
     * @var bool
     */
    private $is_anonymous;
    /**
     * @var bool
     */
    private $can_be_edited;
    /**
     * @var bool
     */
    private $can_manage_chat;
    /**
     * @var bool
     */
    private $can_post_messages;
    /**
     * @var bool
     */
    private $can_edit_messages;
    /**
     * @var bool
     */
    private $can_delete_messages;
    /**
     * @var bool
     */
    private $can_manage_voice_chats;
    /**
     * @var bool
     */
    private $can_restrict_members;
    /**
     * @var bool
     */
    private $can_promote_members;
    /**
     * @var bool
     */
    private $can_change_info;
    /**
     * @var bool
     */
    private $can_invite_users;
    /**
     * @var bool
     */
    private $can_pin_messages;
    /**
     * @var bool
     */
    private $is_member;
    /**
     * @var bool
     */
    private $can_send_messages;
    /**
     * @var bool
     */
    private $can_send_media_messages;
    /**
     * @var bool
     */
    private $can_send_polls;
    /**
     * @var bool
     */
    private $can_send_other_messages;
    /**
     * @var bool
     */
    private $can_add_web_page_previews;
    /**
     * @var int
     */
    private $until_date;

    /**
     * ChatMember constructor.
     * @param User $user
     * @param string $status
     */
    public function __construct(User $user, string $status)
    {
        $this->user = $user;
        $this->status = $status;
    }

    /**
     * @param string $custom_title
     */
    public function setCustomTitle(string $custom_title): void
    {
        $this->custom_title = $custom_title;
    }

    /**
     * @param bool $is_anonymous
     */
    public function setIsAnonymous(bool $is_anonymous): void
    {
        $this->is_anonymous = $is_anonymous;
    }

    /**
     * @param bool $can_be_edited
     */
    public function setCanBeEdited(bool $can_be_edited): void
    {
        $this->can_be_edited = $can_be_edited;
    }

    /**
     * @param bool $can_manage_chat
     */
    public function setCanManageChat(bool $can_manage_chat): void
    {
        $this->can_manage_chat = $can_manage_chat;
    }

    /**
     * @param bool $can_post_messages
     */
    public function setCanPostMessages(bool $can_post_messages): void
    {
        $this->can_post_messages = $can_post_messages;
    }

    /**
     * @param bool $can_edit_messages
     */
    public function setCanEditMessages(bool $can_edit_messages): void
    {
        $this->can_edit_messages = $can_edit_messages;
    }

    /**
     * @param bool $can_delete_messages
     */
    public function setCanDeleteMessages(bool $can_delete_messages): void
    {
        $this->can_delete_messages = $can_delete_messages;
    }

    /**
     * @param bool $can_manage_voice_chats
     */
    public function setCanManageVoiceChats(bool $can_manage_voice_chats): void
    {
        $this->can_manage_voice_chats = $can_manage_voice_chats;
    }

    /**
     * @param bool $can_restrict_members
     */
    public function setCanRestrictMembers(bool $can_restrict_members): void
    {
        $this->can_restrict_members = $can_restrict_members;
    }

    /**
     * @param bool $can_promote_members
     */
    public function setCanPromoteMembers(bool $can_promote_members): void
    {
        $this->can_promote_members = $can_promote_members;
    }

    /**
     * @param bool $can_change_info
     */
    public function setCanChangeInfo(bool $can_change_info): void
    {
        $this->can_change_info = $can_change_info;
    }

    /**
     * @param bool $can_invite_users
     */
    public function setCanInviteUsers(bool $can_invite_users): void
    {
        $this->can_invite_users = $can_invite_users;
    }

    /**
     * @param bool $can_pin_messages
     */
    public function setCanPinMessages(bool $can_pin_messages): void
    {
        $this->can_pin_messages = $can_pin_messages;
    }

    /**
     * @param bool $is_member
     */
    public function setIsMember(bool $is_member): void
    {
        $this->is_member = $is_member;
    }

    /**
     * @param bool $can_send_messages
     */
    public function setCanSendMessages(bool $can_send_messages): void
    {
        $this->can_send_messages = $can_send_messages;
    }

    /**
     * @param bool $can_send_media_messages
     */
    public function setCanSendMediaMessages(bool $can_send_media_messages): void
    {
        $this->can_send_media_messages = $can_send_media_messages;
    }

    /**
     * @param bool $can_send_polls
     */
    public function setCanSendPolls(bool $can_send_polls): void
    {
        $this->can_send_polls = $can_send_polls;
    }

    /**
     * @param bool $can_send_other_messages
     */
    public function setCanSendOtherMessages(bool $can_send_other_messages): void
    {
        $this->can_send_other_messages = $can_send_other_messages;
    }

    /**
     * @param bool $can_add_web_page_previews
     */
    public function setCanAddWebPagePreviews(bool $can_add_web_page_previews): void
    {
        $this->can_add_web_page_previews = $can_add_web_page_previews;
    }

    /**
     * @param int $until_date
     */
    public function setUntilDate(int $until_date): void
    {
        $this->until_date = $until_date;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getCustomTitle(): string
    {
        return $this->custom_title;
    }

    /**
     * @return bool
     */
    public function isIsAnonymous(): bool
    {
        return $this->is_anonymous;
    }

    /**
     * @return bool
     */
    public function isCanBeEdited(): bool
    {
        return $this->can_be_edited;
    }

    /**
     * @return bool
     */
    public function isCanManageChat(): bool
    {
        return $this->can_manage_chat;
    }

    /**
     * @return bool
     */
    public function isCanPostMessages(): bool
    {
        return $this->can_post_messages;
    }

    /**
     * @return bool
     */
    public function isCanEditMessages(): bool
    {
        return $this->can_edit_messages;
    }

    /**
     * @return bool
     */
    public function isCanDeleteMessages(): bool
    {
        return $this->can_delete_messages;
    }

    /**
     * @return bool
     */
    public function isCanManageVoiceChats(): bool
    {
        return $this->can_manage_voice_chats;
    }

    /**
     * @return bool
     */
    public function isCanRestrictMembers(): bool
    {
        return $this->can_restrict_members;
    }

    /**
     * @return bool
     */
    public function isCanPromoteMembers(): bool
    {
        return $this->can_promote_members;
    }

    /**
     * @return bool
     */
    public function isCanChangeInfo(): bool
    {
        return $this->can_change_info;
    }

    /**
     * @return bool
     */
    public function isCanInviteUsers(): bool
    {
        return $this->can_invite_users;
    }

    /**
     * @return bool
     */
    public function isCanPinMessages(): bool
    {
        return $this->can_pin_messages;
    }

    /**
     * @return bool
     */
    public function isIsMember(): bool
    {
        return $this->is_member;
    }

    /**
     * @return bool
     */
    public function isCanSendMessages(): bool
    {
        return $this->can_send_messages;
    }

    /**
     * @return bool
     */
    public function isCanSendMediaMessages(): bool
    {
        return $this->can_send_media_messages;
    }

    /**
     * @return bool
     */
    public function isCanSendPolls(): bool
    {
        return $this->can_send_polls;
    }

    /**
     * @return bool
     */
    public function isCanSendOtherMessages(): bool
    {
        return $this->can_send_other_messages;
    }

    /**
     * @return bool
     */
    public function isCanAddWebPagePreviews(): bool
    {
        return $this->can_add_web_page_previews;
    }

    /**
     * @return int
     */
    public function getUntilDate(): int
    {
        return $this->until_date;
    }




}