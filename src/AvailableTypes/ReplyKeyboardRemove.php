<?php


namespace Parakhatdin\Telegram\AvailableTypes;


/**
 * Class ReplyKeyboardRemove
 * @package Parakhatdin\Telegram\AvailableTypes
 */
class ReplyKeyboardRemove
{
    /**
     * @var true
     */
    private $remove_keyboard;
    /**
     * @var bool
     */
    private $selective;

    /**
     * ReplyKeyboardRemove constructor.
     * @param true $remove_keyboard
     */
    public function __construct($remove_keyboard)
    {
        $this->remove_keyboard = $remove_keyboard;
    }

    /**
     * @param bool $selective
     */
    public function setSelective(bool $selective): void
    {
        $this->selective = $selective;
    }

    /**
     * @return true
     */
    public function getRemoveKeyboard()
    {
        return $this->remove_keyboard;
    }

    /**
     * @return bool
     */
    public function isSelective(): bool
    {
        return $this->selective;
    }



}