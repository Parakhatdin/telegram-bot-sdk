<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class File
 *
 * @property string|null file_path
 * @property int|null file_size
 * @property string file_unique_id
 * @property string file_id
 *
 * @package Parakhatdin\Bot\Objects
 */
class File extends ObjectAbstract
{
    /**
     * File constructor.
     */
    public function __construct
    (
        string $file_id,
        string $file_unique_id,
        ?int $file_size,
        ?string $file_path
    )
    {
        $this->file_id = $file_id;
        $this->file_unique_id = $file_unique_id;
        $this->file_size = $file_size;
        $this->file_path = $file_path;
    }


    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}