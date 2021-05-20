<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class ChatMember
 *
 * @property int|null until_date
 * @property bool|null can_add_web_page_previews
 * @property bool|null can_send_other_messages
 * @property bool|null can_send_polls
 * @property bool|null can_send_media_messages
 * @property bool|null can_send_messages
 * @property bool|null is_member
 * @property bool|null can_pin_messages
 * @property bool|null can_invite_users
 * @property bool|null can_change_info
 * @property bool|null can_promote_members
 * @property bool|null can_restrict_members
 * @property bool|null can_manage_voice_chats
 * @property bool|null can_delete_messages
 * @property bool|null can_edit_messages
 * @property bool|null can_post_messages
 * @property bool|null can_manage_chat
 * @property bool|null can_be_edited
 * @property bool|null is_anonymous
 * @property string|null custom_title
 * @property string status
 * @property User user
 *
 * @package Parakhatdin\Bot\Objects
 */
class ChatMember extends ObjectAbstract
{

    /**
     * ChatMember constructor.
     */
    public function __construct
    (
        User $user,
        string $status,
        ?string $custom_title,
        ?bool $is_anonymous,
        ?bool $can_be_edited,
        ?bool $can_manage_chat,
        ?bool $can_post_messages,
        ?bool $can_edit_messages,
        ?bool $can_delete_messages,
        ?bool $can_manage_voice_chats,
        ?bool $can_restrict_members,
        ?bool $can_promote_members,
        ?bool $can_change_info,
        ?bool $can_invite_users,
        ?bool $can_pin_messages,
        ?bool $is_member,
        ?bool $can_send_messages,
        ?bool $can_send_media_messages,
        ?bool $can_send_polls,
        ?bool $can_send_other_messages,
        ?bool $can_add_web_page_previews,
        ?int $until_date
    )
    {
        $this->user = $user;
        $this->status = $status;
        $this->custom_title = $custom_title;
        $this->is_anonymous = $is_anonymous;
        $this->can_be_edited = $can_be_edited;
        $this->can_manage_chat = $can_manage_chat;
        $this->can_post_messages = $can_post_messages;
        $this->can_edit_messages = $can_edit_messages;
        $this->can_delete_messages = $can_delete_messages;
        $this->can_manage_voice_chats = $can_manage_voice_chats;
        $this->can_restrict_members = $can_restrict_members;
        $this->can_promote_members = $can_promote_members;
        $this->can_change_info = $can_change_info;
        $this->can_invite_users = $can_invite_users;
        $this->can_pin_messages = $can_pin_messages;
        $this->is_member = $is_member;
        $this->can_send_messages = $can_send_messages;
        $this->can_send_media_messages = $can_send_media_messages;
        $this->can_send_polls = $can_send_polls;
        $this->can_send_other_messages = $can_send_other_messages;
        $this->can_add_web_page_previews = $can_add_web_page_previews;
        $this->until_date = $until_date;
    }


    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}