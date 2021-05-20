<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class Chat
 *
 * @property ChatLocation|null location
 * @property int|null linked_chat_id
 * @property bool|null can_set_sticker_set
 * @property string|null sticker_set_name
 * @property int|null message_auto_delete_time
 * @property int|null slow_mode_delay
 * @property ChatPermissions|null permissions
 * @property Message|null pinned_message
 * @property string|null invite_link
 * @property string|null description
 * @property string|null bio
 * @property ChatPhoto|null photo
 * @property string|null last_name
 * @property string|null first_name
 * @property string|null username
 * @property string|null title
 * @property string type
 * @property int id
 *
 * @package Parakhatdin\Bot\Objects
 */
class Chat extends ObjectAbstract
{

    /**
     * Chat constructor.
     */
    public function __construct
    (
        int $id,
        string $type,
        ?string $title,
        ?string $username,
        ?string $first_name,
        ?string $last_name,
        ?ChatPhoto $photo,
        ?string $bio,
        ?string $description,
        ?string $invite_link,
        ?Message $pinned_message,
        ?ChatPermissions $permissions,
        ?int $slow_mode_delay,
        ?int $message_auto_delete_time,
        ?string $sticker_set_name,
        ?bool $can_set_sticker_set,
        ?int $linked_chat_id,
        ?ChatLocation $location
    )
    {
        $this->id = $id;
        $this->type = $type;
        $this->title = $title;
        $this->username = $username;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->photo = $photo;
        $this->bio = $bio;
        $this->description = $description;
        $this->invite_link = $invite_link;
        $this->pinned_message = $pinned_message;
        $this->permissions = $permissions;
        $this->slow_mode_delay = $slow_mode_delay;
        $this->message_auto_delete_time = $message_auto_delete_time;
        $this->sticker_set_name = $sticker_set_name;
        $this->can_set_sticker_set = $can_set_sticker_set;
        $this->linked_chat_id = $linked_chat_id;
        $this->location = $location;
    }


    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
        return new Chat();
    }
}