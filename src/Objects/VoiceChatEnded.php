<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class VoiceChatEnded
 *
 * @property int duration
 *
 * @package Parakhatdin\Bot\Objects
 */
class VoiceChatEnded extends ObjectAbstract
{
    /**
     * VoiceChatEnded constructor.
     */
    public function __construct
    (
        int $duration
    )
    {
        $this->duration = $duration;
    }

    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}