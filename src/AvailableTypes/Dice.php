<?php


namespace Parakhatdin\Telegram\AvailableTypes;


/**
 * Class Dice
 * @package Parakhatdin\Telegram\AvailableTypes
 */
class Dice
{
    /**
     * @var string
     */
    private $emoji;
    /**
     * @var int
     */
    private $value;

    /**
     * Dice constructor.
     * @param string $emoji
     * @param int $value
     */
    public function __construct(string $emoji, int $value)
    {
        $this->emoji = $emoji;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getEmoji(): string
    {
        return $this->emoji;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }



}