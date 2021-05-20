<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class CallbackQuery
 * @property string|null game_short_name
 * @property string|null data
 * @property string chat_instance
 * @property string|null inline_message_id
 * @property Message|null message
 * @property User from
 * @property string id
 * @package Parakhatdin\Bot\Objects
 */
class CallbackQuery extends ObjectAbstract
{

    /**
     * CallbackQuery constructor.
     */
    public function __construct
    (
        string $id,
        User $from,
        ?Message $message,
        ?string $inline_message_id,
        string $chat_instance,
        ?string $data,
        ?string $game_short_name
    )
    {
        $this->id = $id;
        $this->from = $from;
        $this->message = $message;
        $this->inline_message_id = $inline_message_id;
        $this->chat_instance = $chat_instance;
        $this->data = $data;
        $this->game_short_name = $game_short_name;
    }


    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}