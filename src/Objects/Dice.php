<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class Dice
 * @package Parakhatdin\Bot\Objects
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