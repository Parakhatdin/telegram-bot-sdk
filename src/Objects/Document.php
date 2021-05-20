<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class Document
 *
 * @property int|null file_size
 * @property string|null mime_type
 * @property string|null file_name
 * @property PhotoSize|null thumb
 * @property string file_unique_id
 * @property string file_id
 *
 * @package Parakhatdin\Bot\Objects
 */
class Document extends ObjectAbstract
{
    /**
     * Document constructor.
     */
    public function __construct
    (
        string $file_id,
        string $file_unique_id,
        ?PhotoSize $thumb,
        ?string $file_name,
        ?string $mime_type,
        ?int $file_size
    )
    {
        $this->file_id = $file_id;
        $this->file_unique_id = $file_unique_id;
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