<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class PollOption
 *
 * @property int voter_count
 * @property string text
 *
 * @package Parakhatdin\Bot\Objects
 */
class PollOption extends ObjectAbstract
{

    /**
     * PollOption constructor.
     */
    public function __construct
    (
        string $text,
        int $voter_count
    )
    {
        $this->text = $text;
        $this->voter_count = $voter_count;
    }

    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}