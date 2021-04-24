<?php


namespace Parakhatdin\Telegram\AvailableTypes;


/**
 * Class Venue
 * @package Parakhatdin\Telegram\AvailableTypes
 */
class Venue
{
    /**
     * @var Location
     */
    private $location;
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $address;
    /**
     * @var string
     */
    private $foursquare_id;
    /**
     * @var string
     */
    private $foursquare_type;
    /**
     * @var string
     */
    private $google_place_id;
    /**
     * @var string
     */
    private $google_place_type;

    /**
     * Venue constructor.
     * @param Location $location
     * @param string $title
     * @param string $address
     */
    public function __construct(Location $location, string $title, string $address)
    {
        $this->location = $location;
        $this->title = $title;
        $this->address = $address;
    }

    /**
     * @param string $foursquare_id
     */
    public function setFoursquareId(string $foursquare_id): void
    {
        $this->foursquare_id = $foursquare_id;
    }

    /**
     * @param string $foursquare_type
     */
    public function setFoursquareType(string $foursquare_type): void
    {
        $this->foursquare_type = $foursquare_type;
    }

    /**
     * @param string $google_place_id
     */
    public function setGooglePlaceId(string $google_place_id): void
    {
        $this->google_place_id = $google_place_id;
    }

    /**
     * @param string $google_place_type
     */
    public function setGooglePlaceType(string $google_place_type): void
    {
        $this->google_place_type = $google_place_type;
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
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return string
     */
    public function getFoursquareId(): string
    {
        return $this->foursquare_id;
    }

    /**
     * @return string
     */
    public function getFoursquareType(): string
    {
        return $this->foursquare_type;
    }

    /**
     * @return string
     */
    public function getGooglePlaceId(): string
    {
        return $this->google_place_id;
    }

    /**
     * @return string
     */
    public function getGooglePlaceType(): string
    {
        return $this->google_place_type;
    }



}