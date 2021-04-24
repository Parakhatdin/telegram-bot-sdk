<?php


namespace Parakhatdin\Telegram\AvailableTypes;


/**
 * Class VoiceChatEnded
 * @package Parakhatdin\Telegram\AvailableTypes
 */
class VoiceChatEnded
{
    /**
     * @var int
     */
    private $duration;

    /**
     * VoiceChatEnded constructor.
     * @param int $duration
     */
    public function __construct(int $duration)
    {
        $this->duration = $duration;
    }

    /**
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }


}