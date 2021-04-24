<?php


namespace Parakhatdin\Telegram\AvailableTypes;


/**
 * Class File
 * @package Parakhatdin\Telegram\AvailableTypes
 */
class File
{
    /**
     * @var string
     */
    private $file_id;
    /**
     * @var string
     */
    private $file_unique_id;
    /**
     * @var int
     */
    private $file_size;
    /**
     * @var string
     */
    private $file_path;

    /**
     * File constructor.
     * @param string $file_id
     * @param string $file_unique_id
     */
    public function __construct(string $file_id, string $file_unique_id)
    {
        $this->file_id = $file_id;
        $this->file_unique_id = $file_unique_id;
    }

    /**
     * @param int $file_size
     */
    public function setFileSize(int $file_size): void
    {
        $this->file_size = $file_size;
    }

    /**
     * @param string $file_path
     */
    public function setFilePath(string $file_path): void
    {
        $this->file_path = $file_path;
    }

    /**
     * @return string
     */
    public function getFileId(): string
    {
        return $this->file_id;
    }

    /**
     * @return string
     */
    public function getFileUniqueId(): string
    {
        return $this->file_unique_id;
    }

    /**
     * @return int
     */
    public function getFileSize(): int
    {
        return $this->file_size;
    }

    /**
     * @return string
     */
    public function getFilePath(): string
    {
        return $this->file_path;
    }



}