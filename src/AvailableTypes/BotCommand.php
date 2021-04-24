<?php


namespace Parakhatdin\Telegram\AvailableTypes;


/**
 * Class BotCommand
 * @package Parakhatdin\Telegram\AvailableTypes
 */
class BotCommand
{
    /**
     * @var string
     */
    private $command;
    /**
     * @var string
     */
    private $description;

    /**
     * BotCommand constructor.
     * @param string $command
     * @param string $description
     */
    public function __construct(string $command, string $description)
    {
        $this->command = $command;
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getCommand(): string
    {
        return $this->command;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }



}