<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class UserProfilePhotos
 *
 * @property array photos
 * @property int total_count
 *
 * @package Parakhatdin\Bot\Objects
 */
class UserProfilePhotos extends ObjectAbstract
{
    /**
     * UserProfilePhotos constructor.
     */
    public function __construct
    (
        int $total_count,
        array $photos
    )
    {
        $this->total_count = $total_count;
        $this->photos = $photos;
    }

    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}