<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class ReplyKeyboardMarkup
 *
 * @property bool|null selective
 * @property bool|null one_time_keyboard
 * @property bool|null resize_keyboard
 * @property array keyboard
 *
 * @package Parakhatdin\Bot\Objects
 */
class ReplyKeyboardMarkup extends ObjectAbstract
{
    /**
     * ReplyKeyboardMarkup constructor.
     */
    public function __construct
    (
        array $keyboard,
        ?bool $resize_keyboard,
        ?bool $one_time_keyboard,
        ?bool $selective
    )
    {
        $this->keyboard = $keyboard;
        $this->resize_keyboard = $resize_keyboard;
        $this->one_time_keyboard = $one_time_keyboard;
        $this->selective = $selective;
    }


    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}