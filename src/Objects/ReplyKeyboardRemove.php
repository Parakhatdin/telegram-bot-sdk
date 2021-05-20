<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class ReplyKeyboardRemove
 *
 * @property bool|null selective
 * @property true remove_keyboard
 *
 * @package Parakhatdin\Bot\Objects
 */
class ReplyKeyboardRemove extends ObjectAbstract
{
    /**
     * ReplyKeyboardRemove constructor.
     */
    public function __construct
    (
        $remove_keyboard,
        ?bool $selective
    )
    {
        $this->remove_keyboard = $remove_keyboard;
        $this->selective = $selective;
    }


    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}