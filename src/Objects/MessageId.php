<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class MessageId
 *
 * @property int message_id
 *
 * @package Parakhatdin\Bot\Objects
 */
class MessageId extends ObjectAbstract
{

    /**
     * MessageId constructor.
     */
    public function __construct(int $message_id)
    {
        $this->message_id = $message_id;
    }

    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}