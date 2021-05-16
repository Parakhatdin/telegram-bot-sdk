<?php


namespace Parakhatdin\Telegram;


use Parakhatdin\Telegram\Objects\Update;

/**
 * Interface HandlerInterface
 * @package Parakhatdin\Telegram
 */
interface HandlerInterface
{
    /**
     * @param Update $update
     * @return bool
     */
    public function isFit(Update $update): bool;
}