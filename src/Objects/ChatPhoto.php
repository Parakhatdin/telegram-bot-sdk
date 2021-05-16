<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class ChatPhoto
 * @package Parakhatdin\Bot\Objects
 */
class ChatPhoto
{
    /**
     * @var string
     */
    private $small_file_id;
    /**
     * @var string
     */
    private $small_file_unique_id;
    /**
     * @var string
     */
    private $big_file_id;
    /**
     * @var string
     */
    private $big_file_unique_id;

    /**
     * ChatPhoto constructor.
     * @param string $small_file_id
     * @param string $small_file_unique_id
     * @param string $big_file_id
     * @param string $big_file_unique_id
     */
    public function __construct(string $small_file_id, string $small_file_unique_id, string $big_file_id, string $big_file_unique_id)
    {
        $this->small_file_id = $small_file_id;
        $this->small_file_unique_id = $small_file_unique_id;
        $this->big_file_id = $big_file_id;
        $this->big_file_unique_id = $big_file_unique_id;
    }

    /**
     * @return string
     */
    public function getSmallFileId(): string
    {
        return $this->small_file_id;
    }

    /**
     * @return string
     */
    public function getSmallFileUniqueId(): string
    {
        return $this->small_file_unique_id;
    }

    /**
     * @return string
     */
    public function getBigFileId(): string
    {
        return $this->big_file_id;
    }

    /**
     * @return string
     */
    public function getBigFileUniqueId(): string
    {
        return $this->big_file_unique_id;
    }




}