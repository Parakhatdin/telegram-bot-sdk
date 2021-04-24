<?php


namespace Parakhatdin\Telegram\AvailableMethods;


/**
 * Class SendMessage
 * @package Parakhatdin\Telegram\AvailableMethods
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

        $this->method_name = "sendMessage";
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


    public function params()
    {
        return [
            "chat_id" => $this->chat_id,
            "text" => $this->text
        ];
    }
}