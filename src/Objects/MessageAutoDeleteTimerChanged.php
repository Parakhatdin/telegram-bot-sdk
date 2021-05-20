<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class MessageAutoDeleteTimerChanged
 *
 * @property int message_auto_delete_time
 *
 * @package Parakhatdin\Bot\Objects
 */
class MessageAutoDeleteTimerChanged extends ObjectAbstract
{

    /**
     * MessageAutoDeleteTimerChanged constructor.
     */
    public function __construct
    (
        int $message_auto_delete_time
    )
    {
        $this->message_auto_delete_time = $message_auto_delete_time;
    }

    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}