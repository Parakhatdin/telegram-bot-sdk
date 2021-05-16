<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class UserProfilePhotos
 * @package Parakhatdin\Bot\Objects
 */
class UserProfilePhotos
{
    /**
     * @var int
     */
    private $total_count;
    /**
     * @var PhotoSize[][]
     */
    private $photos;

    /**
     * UserProfilePhotos constructor.
     * @param int $total_count
     * @param PhotoSize[][] $photos
     */
    public function __construct(int $total_count, array $photos)
    {
        $this->total_count = $total_count;
        $this->photos = $photos;
    }

    /**
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->total_count;
    }

    /**
     * @return PhotoSize[][]
     */
    public function getPhotos(): array
    {
        return $this->photos;
    }


}