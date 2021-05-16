<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class ReplyKeyboardMarkup
 * @package Parakhatdin\Bot\Objects
 */
class ReplyKeyboardMarkup
{
    /**
     * @var KeyboardButton[][]
     */
    private $keyboard;
    /**
     * @var bool
     */
    private $resize_keyboard;
    /**
     * @var bool
     */
    private $one_time_keyboard;
    /**
     * @var bool
     */
    private $selective;

    /**
     * ReplyKeyboardMarkup constructor.
     * @param KeyboardButton[][] $keyboard
     */
    public function __construct(array $keyboard)
    {
        $this->keyboard = $keyboard;
    }

    /**
     * @param bool $resize_keyboard
     */
    public function setResizeKeyboard(bool $resize_keyboard): void
    {
        $this->resize_keyboard = $resize_keyboard;
    }

    /**
     * @param bool $one_time_keyboard
     */
    public function setOneTimeKeyboard(bool $one_time_keyboard): void
    {
        $this->one_time_keyboard = $one_time_keyboard;
    }

    /**
     * @param bool $selective
     */
    public function setSelective(bool $selective): void
    {
        $this->selective = $selective;
    }

    /**
     * @return KeyboardButton[][]
     */
    public function getKeyboard(): array
    {
        return $this->keyboard;
    }

    /**
     * @return bool
     */
    public function isResizeKeyboard(): bool
    {
        return $this->resize_keyboard;
    }

    /**
     * @return bool
     */
    public function isOneTimeKeyboard(): bool
    {
        return $this->one_time_keyboard;
    }

    /**
     * @return bool
     */
    public function isSelective(): bool
    {
        return $this->selective;
    }



}