<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class ChatPermissions
 * @package Parakhatdin\Bot\Objects
 */
class ChatPermissions
{
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
     * @return bool
     */
    public function isCanSendMessages(): bool
    {
        return $this->can_send_messages;
    }

    /**
     * @param bool $can_send_messages
     */
    public function setCanSendMessages(bool $can_send_messages): void
    {
        $this->can_send_messages = $can_send_messages;
    }

    /**
     * @return bool
     */
    public function isCanSendMediaMessages(): bool
    {
        return $this->can_send_media_messages;
    }

    /**
     * @param bool $can_send_media_messages
     */
    public function setCanSendMediaMessages(bool $can_send_media_messages): void
    {
        $this->can_send_media_messages = $can_send_media_messages;
    }

    /**
     * @return bool
     */
    public function isCanSendPolls(): bool
    {
        return $this->can_send_polls;
    }

    /**
     * @param bool $can_send_polls
     */
    public function setCanSendPolls(bool $can_send_polls): void
    {
        $this->can_send_polls = $can_send_polls;
    }

    /**
     * @return bool
     */
    public function isCanSendOtherMessages(): bool
    {
        return $this->can_send_other_messages;
    }

    /**
     * @param bool $can_send_other_messages
     */
    public function setCanSendOtherMessages(bool $can_send_other_messages): void
    {
        $this->can_send_other_messages = $can_send_other_messages;
    }

    /**
     * @return bool
     */
    public function isCanAddWebPagePreviews(): bool
    {
        return $this->can_add_web_page_previews;
    }

    /**
     * @param bool $can_add_web_page_previews
     */
    public function setCanAddWebPagePreviews(bool $can_add_web_page_previews): void
    {
        $this->can_add_web_page_previews = $can_add_web_page_previews;
    }

    /**
     * @return bool
     */
    public function isCanChangeInfo(): bool
    {
        return $this->can_change_info;
    }

    /**
     * @param bool $can_change_info
     */
    public function setCanChangeInfo(bool $can_change_info): void
    {
        $this->can_change_info = $can_change_info;
    }

    /**
     * @return bool
     */
    public function isCanInviteUsers(): bool
    {
        return $this->can_invite_users;
    }

    /**
     * @param bool $can_invite_users
     */
    public function setCanInviteUsers(bool $can_invite_users): void
    {
        $this->can_invite_users = $can_invite_users;
    }

    /**
     * @return bool
     */
    public function isCanPinMessages(): bool
    {
        return $this->can_pin_messages;
    }

    /**
     * @param bool $can_pin_messages
     */
    public function setCanPinMessages(bool $can_pin_messages): void
    {
        $this->can_pin_messages = $can_pin_messages;
    }



}