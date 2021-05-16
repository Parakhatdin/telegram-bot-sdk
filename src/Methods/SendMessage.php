<?php


namespace Parakhatdin\Telegram\Methods;


/**
 * Class SendMessage
 * @package Parakhatdin\Bot\Methods
 */
class SendMessage extends Method
{
    /**
     * @var int | string
     */
    private $chat_id;
    /**
     * @var string
     */
    private $text;
    /**
     * @var string
     */
    private $parse_mode;

    /**
     * SendMessage constructor.
     * @param int|string $chat_id
     * @param string $text
     */
    public function __construct($chat_id, string $text)
    {
        $this->chat_id = $chat_id;
        $this->text = $text;
    }


    /**
     * @param string $parse_mode
     * @return SendMessage
     */
    public function setParseMode(string $parse_mode): SendMessage
    {
        $this->parse_mode = $parse_mode;
        return $this;
    }


    protected function params()
    {
        return [
            "chat_id" => $this->chat_id,
            "text" => $this->text
        ];
    }

    public function methodName(): string
    {
        return "sendMessage";
    }
}