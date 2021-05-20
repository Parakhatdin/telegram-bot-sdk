<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class KeyboardButton
 *
 * @property KeyboardButtonPollType|null request_poll
 * @property bool|null request_location
 * @property bool|null request_contact
 * @property string text
 *
 * @package Parakhatdin\Bot\Objects
 */
class KeyboardButton extends ObjectAbstract
{
    /**
     * KeyboardButton constructor.
     */
    public function __construct
    (
        string $text,
        ?bool $request_contact,
        ?bool $request_location,
        ?KeyboardButtonPollType $request_poll
    )
    {
        $this->text = $text;
        $this->request_contact = $request_contact;
        $this->request_location = $request_location;
        $this->request_poll = $request_poll;
    }


    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}