<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class Dice
 *
 * @property int value
 * @property string emoji
 *
 * @package Parakhatdin\Bot\Objects
 */
class Dice extends ObjectAbstract
{
    /**
     * Dice constructor.
     */
    public function __construct
    (
        string $emoji,
        int $value
    )
    {
        $this->emoji = $emoji;
        $this->value = $value;
    }

    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}