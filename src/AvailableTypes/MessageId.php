<?php


namespace Parakhatdin\Telegram\AvailableTypes;


/**
 * Class MessageId
 * @package Parakhatdin\Telegram\AvailableTypes
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