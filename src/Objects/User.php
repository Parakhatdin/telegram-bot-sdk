<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class User
 *
 * @property bool|null supports_inline_queries
 * @property bool|null can_read_all_group_messages
 * @property bool|null can_join_groups
 * @property string|null language_code
 * @property string|null username
 * @property string|null last_name
 * @property string first_name
 * @property bool is_bot
 * @property int id
 *
 * @package Parakhatdin\Bot\Objects
 */
class User extends ObjectAbstract
{
    /**
     * User constructor.
     */
    public function __construct
    (
        int $id,
        bool $is_bot,
        string $first_name,
        ?string $last_name,
        ?string $username,
        ?string $language_code,
        ?bool $can_join_groups,
        ?bool $can_read_all_group_messages,
        ?bool $supports_inline_queries
    )
    {
        $this->id = $id;
        $this->is_bot = $is_bot;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->username = $username;
        $this->language_code = $language_code;
        $this->can_join_groups = $can_join_groups;
        $this->can_read_all_group_messages = $can_read_all_group_messages;
        $this->supports_inline_queries = $supports_inline_queries;
    }


    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}