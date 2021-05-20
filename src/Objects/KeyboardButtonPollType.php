<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class KeyboardButtonPollType
 *
 * @property string type
 *
 * @package Parakhatdin\Bot\Objects
 */
class KeyboardButtonPollType extends ObjectAbstract
{

    /**
     * KeyboardButtonPollType constructor.
     */
    public function __construct
    (
        string $type
    )
    {
        $this->type = $type;
    }


    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}