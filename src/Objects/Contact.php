<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class Contact
 *
 * @property string|null vcard
 * @property int|null user_id
 * @property string|null last_name
 * @property string first_name
 * @property string phone_number
 *
 * @package Parakhatdin\Bot\Objects
 */
class Contact extends ObjectAbstract
{
    /**
     * Contact constructor.
     */
    public function __construct
    (
        string $phone_number,
        string $first_name,
        ?string $last_name,
        ?int $user_id,
        ?string $vcard
    )
    {
        $this->phone_number = $phone_number;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->user_id = $user_id;
        $this->vcard = $vcard;
    }


    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}