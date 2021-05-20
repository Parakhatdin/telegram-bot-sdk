<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class Voice
 *
 * @property int|null file_size
 * @property string|null mime_type
 * @property int duration
 * @property string file_unique_id
 * @property string file_id
 *
 * @package Parakhatdin\Bot\Objects
 */
class Voice extends ObjectAbstract
{
    /**
     * Voice constructor.
     */
    public function __construct
    (
        string $file_id,
        string $file_unique_id,
        int $duration,
        ?string $mime_type,
        ?int $file_size
    )
    {
        $this->file_id = $file_id;
        $this->file_unique_id = $file_unique_id;
        $this->duration = $duration;
        $this->mime_type = $mime_type;
        $this->file_size = $file_size;
    }


    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}