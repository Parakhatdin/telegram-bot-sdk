<?php


namespace Parakhatdin\Telegram;


/**
 * Class Bot
 *
 * @package Bot
 */
class Bot
{
    /**
     * @var string
     */
    protected $bot_token;

    /**
     * Bot constructor.
     * @param string $bot_token
     */
    public function __construct(string $bot_token)
    {
        $this->bot_token = $bot_token;
    }

    /**
     * @return string
     */
    public function getBotToken(): string
    {
        return $this->bot_token;
    }

}
