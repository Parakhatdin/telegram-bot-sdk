<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class PollOption
 * @package Parakhatdin\Bot\Objects
 */
class PollOption
{
    /**
     * @var string
     */
    private $text;
    /**
     * @var int
     */
    private $voter_count;

    /**
     * PollOption constructor.
     * @param string $text
     * @param int $voter_count
     */
    public function __construct(string $text, int $voter_count)
    {
        $this->text = $text;
        $this->voter_count = $voter_count;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return int
     */
    public function getVoterCount(): int
    {
        return $this->voter_count;
    }



}