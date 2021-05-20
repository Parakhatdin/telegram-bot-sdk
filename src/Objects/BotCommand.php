<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class BotCommand
 *
 * @property string description
 * @property string command
 *
 * @package Parakhatdin\Bot\Objects
 */
class BotCommand extends ObjectAbstract
{
    /**
     * BotCommand constructor.
     */
    public function __construct(string $command, string $description)
    {
        $this->command = $command;
        $this->description = $description;
    }

    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}