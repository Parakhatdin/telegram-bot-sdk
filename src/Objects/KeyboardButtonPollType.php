<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class KeyboardButtonPollType
 * @package Parakhatdin\Bot\Objects
 */
class KeyboardButtonPollType
{
    /**
     * @var string
     */
    private $type;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

}