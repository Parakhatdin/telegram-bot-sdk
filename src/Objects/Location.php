<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class Location
 * @package Parakhatdin\Bot\Objects
 */
class Location
{
    /**
     * @var float
     */
    private $longitude;
    /**
     * @var float
     */
    private $latitude;
    /**
     * @var float
     */
    private $horizontal_accuracy;
    /**
     * @var int
     */
    private $live_period;
    /**
     * @var int
     */
    private $heading;
    /**
     * @var int
     */
    private $proximity_alert_radius;

    /**
     * Location constructor.
     * @param float $longitude
     * @param float $latitude
     */
    public function __construct(float $longitude, float $latitude)
    {
        $this->longitude = $longitude;
        $this->latitude = $latitude;
    }

    /**
     * @return float
     */
    public function getHorizontalAccuracy(): float
    {
        return $this->horizontal_accuracy;
    }

    /**
     * @return int
     */
    public function getLivePeriod(): int
    {
        return $this->live_period;
    }

    /**
     * @return int
     */
    public function getHeading(): int
    {
        return $this->heading;
    }

    /**
     * @return int
     */
    public function getProximityAlertRadius(): int
    {
        return $this->proximity_alert_radius;
    }


}