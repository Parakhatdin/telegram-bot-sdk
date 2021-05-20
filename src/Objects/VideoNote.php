<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class VideoNote
 *
 * @property int|null file_size
 * @property PhotoSize|null thumb
 * @property int duration
 * @property int length
 * @property string file_unique_id
 * @property string file_id
 *
 * @package Parakhatdin\Bot\Objects
 */
class VideoNote extends ObjectAbstract
{
    /**
     * VideoNote constructor.
     */
    public function __construct
    (
        string $file_id,
        string $file_unique_id,
        int $length,
        int $duration,
        ?PhotoSize $thumb,
        ?int $file_size
    )
    {
        $this->file_id = $file_id;
        $this->file_unique_id = $file_unique_id;
        $this->length = $length;
        $this->duration = $duration;
        $this->thumb = $thumb;
        $this->file_size = $file_size;
    }


    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}