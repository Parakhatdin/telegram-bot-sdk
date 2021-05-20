<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class InlineKeyboardMarkup
 *
 * @property InlineKeyboardButton[][] inline_keyboard
 *
 * @package Parakhatdin\Bot\Objects
 */
class InlineKeyboardMarkup extends ObjectAbstract
{

    /**
     * InlineKeyboardMarkup constructor.
     */
    public function __construct(array $inline_keyboard)
    {
        $this->inline_keyboard = $inline_keyboard;
    }

    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}