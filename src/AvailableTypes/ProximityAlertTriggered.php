<?php


namespace Parakhatdin\Telegram\AvailableTypes;


/**
 * Class ProximityAlertTriggered
 * @package Parakhatdin\Telegram\AvailableTypes
 */
class ProximityAlertTriggered
{
    /**
     * @var User
     */
    private $traveler;
    /**
     * @var User
     */
    private $watcher;
    /**
     * @var int
     */
    private $distance;

    /**
     * ProximityAlertTriggered constructor.
     * @param User $traveler
     * @param User $watcher
     * @param int $distance
     */
    public function __construct(User $traveler, User $watcher, int $distance)
    {
        $this->traveler = $traveler;
        $this->watcher = $watcher;
        $this->distance = $distance;
    }

    /**
     * @return User
     */
    public function getTraveler(): User
    {
        return $this->traveler;
    }

    /**
     * @return User
     */
    public function getWatcher(): User
    {
        return $this->watcher;
    }

    /**
     * @return int
     */
    public function getDistance(): int
    {
        return $this->distance;
    }



}