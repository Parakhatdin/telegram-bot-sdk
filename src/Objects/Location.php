<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class Location
 *
 * @property int|null proximity_alert_radius
 * @property int|null heading
 * @property int|null live_period
 * @property float|null horizontal_accuracy
 * @property float latitude
 * @property float longitude
 *
 * @package Parakhatdin\Bot\Objects
 */
class Location extends ObjectAbstract
{
    /**
     * Location constructor.
     */
    public function __construct
    (
        float $longitude,
        float $latitude,
        ?float $horizontal_accuracy,
        ?int $live_period,
        ?int $heading,
        ?int $proximity_alert_radius
    )
    {
        $this->longitude = $longitude;
        $this->latitude = $latitude;
        $this->horizontal_accuracy = $horizontal_accuracy;
        $this->live_period = $live_period;
        $this->heading = $heading;
        $this->proximity_alert_radius = $proximity_alert_radius;
    }


    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}