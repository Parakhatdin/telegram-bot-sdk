<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class PhotoSize
 *
 * @property int|null file_size
 * @property int height
 * @property int width
 * @property string file_unique_id
 * @property string file_id
 *
 * @package Parakhatdin\Bot\Objects
 */
class PhotoSize extends ObjectAbstract
{
    /**
     * PhotoSize constructor.
     */
    public function __construct
    (
        string $file_id,
        string $file_unique_id,
        int $width,
        int $height,
        ?int $file_size
    )
    {
        $this->file_id = $file_id;
        $this->file_unique_id = $file_unique_id;
        $this->width = $width;
        $this->height = $height;
        $this->file_size = $file_size;
    }


    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}