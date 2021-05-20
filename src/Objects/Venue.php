<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class Venue
 *
 * @property string|null google_place_type
 * @property string|null google_place_id
 * @property string|null foursquare_type
 * @property string|null foursquare_id
 * @property string address
 * @property string title
 * @property Location location
 *
 * @package Parakhatdin\Bot\Objects
 */
class Venue extends ObjectAbstract
{
    /**
     * Venue constructor.
     */
    public function __construct
    (
        Location $location,
        string $title,
        string $address,
        ?string $foursquare_id,
        ?string $foursquare_type,
        ?string $google_place_id,
        ?string $google_place_type
    )
    {
        $this->location = $location;
        $this->title = $title;
        $this->address = $address;
        $this->foursquare_id = $foursquare_id;
        $this->foursquare_type = $foursquare_type;
        $this->google_place_id = $google_place_id;
        $this->google_place_type = $google_place_type;
    }


    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}