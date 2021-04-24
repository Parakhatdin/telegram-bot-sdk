<?php


namespace Parakhatdin\Telegram;


/**
 * Class Telegram
 *
 * @package Telegram
 */
class Telegram
{
    /**
     * @var string
     */
    protected $bot_token;

    /**
     * Telegram constructor.
     * @param string $bot_token
     */
    public function __construct(string $bot_token)
    {
        $this->bot_token = $bot_token;
        Request::init($this);
    }

    /**
     * @return string
     */
    public function getBotToken(): string
    {
        return $this->bot_token;
    }

}
