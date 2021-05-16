<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class MessageId
 * @package Parakhatdin\Bot\Objects
 */
class MessageId
{
    /**
     * @var int
     */
    private $message_id;

    /**
     * MessageId constructor.
     * @param int $message_id
     */
    public function __construct(int $message_id)
    {
        $this->message_id = $message_id;
    }

    /**
     * @return int
     */
    public function getMessageId(): int
    {
        return $this->message_id;
    }



}