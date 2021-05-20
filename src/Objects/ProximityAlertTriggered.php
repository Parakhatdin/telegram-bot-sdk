<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class ProximityAlertTriggered
 *
 * @property int distance
 * @property User watcher
 * @property User traveler
 *
 * @package Parakhatdin\Bot\Objects
 */
class ProximityAlertTriggered extends ObjectAbstract
{

    /**
     * ProximityAlertTriggered constructor.
     */
    public function __construct
    (
        User $traveler,
        User $watcher,
        int $distance
    )
    {
        $this->traveler = $traveler;
        $this->watcher = $watcher;
        $this->distance = $distance;
    }

    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}