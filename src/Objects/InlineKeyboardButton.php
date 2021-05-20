<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class InlineKeyboardButton
 *
 * @property bool|null pay
 * @property CallbackGame|null callback_game
 * @property string|null switch_inline_query_current_chat
 * @property string|null switch_inline_query
 * @property string|null callback_data
 * @property LoginUrl|null login_url
 * @property string|null url
 * @property string text
 *
 * @package Parakhatdin\Bot\Objects
 */
class InlineKeyboardButton extends ObjectAbstract
{
    /**
     * InlineKeyboardButton constructor.
     */
    public function __construct
    (
        string $text,
        ?string $url,
        ?LoginUrl $login_url,
        ?string $callback_data,
        ?string $switch_inline_query,
        ?string $switch_inline_query_current_chat,
        ?CallbackGame $callback_game,
        ?bool $pay
    )
    {
        $this->text = $text;
        $this->url = $url;
        $this->login_url = $login_url;
        $this->callback_data = $callback_data;
        $this->switch_inline_query = $switch_inline_query;
        $this->switch_inline_query_current_chat = $switch_inline_query_current_chat;
        $this->callback_game = $callback_game;
        $this->pay = $pay;
    }


    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}