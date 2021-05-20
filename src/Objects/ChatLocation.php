<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class ChatLocation
 *
 * @property string address
 * @property Location location
 *
 * @package Parakhatdin\Bot\Objects
 */
class ChatLocation extends ObjectAbstract
{

    /**
     * ChatLocation constructor.
     */
    public function __construct(Location $location, string $address)
    {
        $this->location = $location;
        $this->address = $address;
    }

    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}