<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class Audio
 *
 * @property PhotoSize|null thumb
 * @property int|null file_size
 * @property string|null mime_type
 * @property string|null file_name
 * @property string|null title
 * @property string|null performer
 * @property int duration
 * @property string file_unique_id
 * @property string file_id
 *
 * @package Parakhatdin\Bot\Objects
 */
class Audio extends ObjectAbstract
{
    /**
     * Audio constructor.
     */
    public function __construct
    (
        string $file_id,
        string $file_unique_id,
        int $duration,
        ?string $performer,
        ?string $title,
        ?string $file_name,
        ?string $mime_type,
        ?int $file_size,
        ?PhotoSize $thumb
    )
    {
        $this->file_id = $file_id;
        $this->file_unique_id = $file_unique_id;
        $this->duration = $duration;
        $this->performer = $performer;
        $this->title = $title;
        $this->file_name = $file_name;
        $this->mime_type = $mime_type;
        $this->file_size = $file_size;
        $this->thumb = $thumb;
    }


    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}