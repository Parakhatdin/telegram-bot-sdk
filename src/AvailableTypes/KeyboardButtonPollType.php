<?php


namespace Parakhatdin\Telegram\AvailableTypes;


/**
 * Class KeyboardButtonPollType
 * @package Parakhatdin\Telegram\AvailableTypes
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