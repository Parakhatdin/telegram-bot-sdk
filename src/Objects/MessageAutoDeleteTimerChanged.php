<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class MessageAutoDeleteTimerChanged
 * @package Parakhatdin\Bot\Objects
 */
class MessageAutoDeleteTimerChanged
{
    /**
     * @var int
     */
    private $message_auto_delete_time;

    /**
     * MessageAutoDeleteTimerChanged constructor.
     * @param int $message_auto_delete_time
     */
    public function __construct(int $message_auto_delete_time)
    {
        $this->message_auto_delete_time = $message_auto_delete_time;
    }

    /**
     * @return int
     */
    public function getMessageAutoDeleteTime(): int
    {
        return $this->message_auto_delete_time;
    }


}