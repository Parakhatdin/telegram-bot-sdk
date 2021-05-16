<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class InlineKeyboardButton
 * @package Parakhatdin\Bot\Objects
 */
class InlineKeyboardButton
{
    /**
     * @var string
     */
    private $text;
    /**
     * @var string
     */
    private $url;
    /**
     * @var LoginUrl
     */
    private $login_url;
    /**
     * @var string
     */
    private $callback_data;
    /**
     * @var string
     */
    private $switch_inline_query;
    /**
     * @var string
     */
    private $switch_inline_query_current_chat;
    /**
     * @var CallbackGame
     */
    private $callback_game;
    /**
     * @var bool
     */
    private $pay;

    /**
     * InlineKeyboardButton constructor.
     * @param string $text
     */
    public function __construct(string $text)
    {
        $this->text = $text;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * @param LoginUrl $login_url
     */
    public function setLoginUrl(LoginUrl $login_url): void
    {
        $this->login_url = $login_url;
    }

    /**
     * @param string $callback_data
     */
    public function setCallbackData(string $callback_data): void
    {
        $this->callback_data = $callback_data;
    }

    /**
     * @param string $switch_inline_query
     */
    public function setSwitchInlineQuery(string $switch_inline_query): void
    {
        $this->switch_inline_query = $switch_inline_query;
    }

    /**
     * @param string $switch_inline_query_current_chat
     */
    public function setSwitchInlineQueryCurrentChat(string $switch_inline_query_current_chat): void
    {
        $this->switch_inline_query_current_chat = $switch_inline_query_current_chat;
    }

    /**
     * @param CallbackGame $callback_game
     */
    public function setCallbackGame(CallbackGame $callback_game): void
    {
        $this->callback_game = $callback_game;
    }

    /**
     * @param bool $pay
     */
    public function setPay(bool $pay): void
    {
        $this->pay = $pay;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return LoginUrl
     */
    public function getLoginUrl(): LoginUrl
    {
        return $this->login_url;
    }

    /**
     * @return string
     */
    public function getCallbackData(): string
    {
        return $this->callback_data;
    }

    /**
     * @return string
     */
    public function getSwitchInlineQuery(): string
    {
        return $this->switch_inline_query;
    }

    /**
     * @return string
     */
    public function getSwitchInlineQueryCurrentChat(): string
    {
        return $this->switch_inline_query_current_chat;
    }

    /**
     * @return CallbackGame
     */
    public function getCallbackGame(): CallbackGame
    {
        return $this->callback_game;
    }

    /**
     * @return bool
     */
    public function isPay(): bool
    {
        return $this->pay;
    }



}