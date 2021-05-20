<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class ResponseParameters
 *
 * @property int retry_after
 * @property int migrate_to_chat_id
 *
 * @package Parakhatdin\Bot\Objects
 */
class ResponseParameters extends ObjectAbstract
{
    /**
     * ResponseParameters constructor.
     */
    public function __construct
    (
        int $migrate_to_chat_id,
        int $retry_after
    )
    {
        $this->migrate_to_chat_id = $migrate_to_chat_id;
        $this->retry_after = $retry_after;
    }


    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}