<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class ChatMemberUpdated
 *
 * @property ChatInviteLink|null invite_link
 * @property ChatMember new_chat_member
 * @property ChatMember old_chat_member
 * @property int date
 * @property User from
 * @property Chat chat
 *
 * @package Parakhatdin\Bot\Objects
 */
class ChatMemberUpdated extends ObjectAbstract
{

    /**
     * ChatMemberUpdated constructor.
     */
    public function __construct
    (
        Chat $chat,
        User $from,
        int $date,
        ChatMember $old_chat_member,
        ChatMember $new_chat_member,
        ?ChatInviteLink $invite_link
    )
    {
        $this->chat = $chat;
        $this->from = $from;
        $this->date = $date;
        $this->old_chat_member = $old_chat_member;
        $this->new_chat_member = $new_chat_member;
        $this->invite_link = $invite_link;
    }


    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}