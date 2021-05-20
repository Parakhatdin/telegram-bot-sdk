<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class ChatPermissions
 *
 * @property bool|null can_pin_messages
 * @property bool|null can_invite_users
 * @property bool|null can_change_info
 * @property bool|null can_add_web_page_previews
 * @property bool|null can_send_other_messages
 * @property bool|null can_send_polls
 * @property bool|null can_send_media_messages
 * @property bool|null can_send_messages
 *
 * @package Parakhatdin\Bot\Objects
 */
class ChatPermissions extends ObjectAbstract
{

    /**
     * ChatPermissions constructor.
     */
    public function __construct
    (
        ?bool $can_send_messages,
        ?bool $can_send_media_messages,
        ?bool $can_send_polls,
        ?bool $can_send_other_messages,
        ?bool $can_add_web_page_previews,
        ?bool $can_change_info,
        ?bool $can_invite_users,
        ?bool $can_pin_messages
    )
    {
        $this->can_send_messages = $can_send_messages;
        $this->can_send_media_messages = $can_send_media_messages;
        $this->can_send_polls = $can_send_polls;
        $this->can_send_other_messages = $can_send_other_messages;
        $this->can_add_web_page_previews = $can_add_web_page_previews;
        $this->can_change_info = $can_change_info;
        $this->can_invite_users = $can_invite_users;
        $this->can_pin_messages = $can_pin_messages;
    }


    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}