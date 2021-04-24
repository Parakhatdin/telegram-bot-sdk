<?php


namespace Parakhatdin\Telegram\AvailableTypes;


/**
 * Class ChatLocation
 * @package Parakhatdin\Telegram\AvailableTypes
 */
class ChatLocation
{
    /**
     * @var Location
     */
    private $location;
    /**
     * @var string
     */
    private $address;

    /**
     * ChatLocation constructor.
     * @param Location $location
     * @param string $address
     */
    public function __construct(Location $location, string $address)
    {
        $this->location = $location;
        $this->address = $address;
    }

    /**
     * @return Location
     */
    public function getLocation(): Location
    {
        return $this->location;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }



}