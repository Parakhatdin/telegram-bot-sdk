<?php


namespace Parakhatdin\Telegram\AvailableTypes;


/**
 * Class InlineKeyboardMarkup
 * @package Parakhatdin\Telegram\AvailableTypes
 */
class InlineKeyboardMarkup
{
    /**
     * @var InlineKeyboardButton[][]
     */
    private $inline_keyboard;

    /**
     * InlineKeyboardMarkup constructor.
     * @param InlineKeyboardButton[][] $inline_keyboard
     */
    public function __construct(array $inline_keyboard)
    {
        $this->inline_keyboard = $inline_keyboard;
    }

    /**
     * @return InlineKeyboardButton[][]
     */
    public function getInlineKeyboard(): array
    {
        return $this->inline_keyboard;
    }



}