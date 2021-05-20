<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class ChatPhoto
 *
 * @property string big_file_unique_id
 * @property string big_file_id
 * @property string small_file_unique_id
 * @property string small_file_id
 *
 * @package Parakhatdin\Bot\Objects
 */
class ChatPhoto extends ObjectAbstract
{
    /**
     * ChatPhoto constructor.
     */
    public function __construct
    (
        string $small_file_id,
        string $small_file_unique_id,
        string $big_file_id,
        string $big_file_unique_id
    )
    {
        $this->small_file_id = $small_file_id;
        $this->small_file_unique_id = $small_file_unique_id;
        $this->big_file_id = $big_file_id;
        $this->big_file_unique_id = $big_file_unique_id;
    }

    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}