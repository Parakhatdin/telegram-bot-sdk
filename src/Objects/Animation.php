<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class Animation
 *
 * @property int|null file_size
 * @property string|null mime_type
 * @property string|null file_name
 * @property PhotoSize|null thumb
 * @property int duration
 * @property int height
 * @property int width
 * @property string file_unique_id
 * @property string file_id
 *
 * @package Parakhatdin\Bot\Objects
 */
class Animation extends ObjectAbstract
{

    /**
     * Animation constructor.
     */
    public function __construct
    (
        string $file_id,
        string $file_unique_id,
        int $width,
        int $height,
        int $duration,
        ?PhotoSize $thumb,
        ?string $file_name,
        ?string $mime_type,
        ?int $file_size
    )
    {
        $this->file_id = $file_id;
        $this->file_unique_id = $file_unique_id;
        $this->width = $width;
        $this->height = $height;
        $this->duration = $duration;
        $this->thumb = $thumb;
        $this->file_name = $file_name;
        $this->mime_type = $mime_type;
        $this->file_size = $file_size;
    }

    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}