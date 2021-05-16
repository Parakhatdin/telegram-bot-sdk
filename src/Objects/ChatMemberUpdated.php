<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class ChatMemberUpdated
 * @package Parakhatdin\Bot\Objects
 */
class ChatMemberUpdated
{
    /**
     * @var Chat
     */
    private $chat;
    /**
     * @var User
     */
    private $from;
    /**
     * @var int
     */
    private $date;
    /**
     * @var ChatMember
     */
    private $old_chat_member;
    /**
     * @var ChatMember
     */
    private $new_chat_member;
    /**
     * @var ChatInviteLink
     */
    private $invite_link;

    /**
     * ChatMemberUpdated constructor.
     * @param Chat $chat
     * @param User $from
     * @param int $date
     * @param ChatMember $old_chat_member
     * @param ChatMember $new_chat_member
     */
    public function __construct(Chat $chat, User $from, int $date, ChatMember $old_chat_member, ChatMember $new_chat_member)
    {
        $this->chat = $chat;
        $this->from = $from;
        $this->date = $date;
        $this->old_chat_member = $old_chat_member;
        $this->new_chat_member = $new_chat_member;
    }

    /**
     * @param ChatInviteLink $invite_link
     */
    public function setInviteLink(ChatInviteLink $invite_link): void
    {
        $this->invite_link = $invite_link;
    }

    /**
     * @return Chat
     */
    public function getChat(): Chat
    {
        return $this->chat;
    }

    /**
     * @return User
     */
    public function getFrom(): User
    {
        return $this->from;
    }

    /**
     * @return int
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * @return ChatMember
     */
    public function getOldChatMember(): ChatMember
    {
        return $this->old_chat_member;
    }

    /**
     * @return ChatMember
     */
    public function getNewChatMember(): ChatMember
    {
        return $this->new_chat_member;
    }

    /**
     * @return ChatInviteLink
     */
    public function getInviteLink(): ChatInviteLink
    {
        return $this->invite_link;
    }



}