<?php


namespace Parakhatdin\Telegram\AvailableTypes;


/**
 * Class PhotoSize
 * @package Parakhatdin\Telegram\AvailableTypes
 */
class PhotoSize
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
    private $width;
    /**
     * @var int
     */
    private $height;
    /**
     * @var int
     */
    private $file_size;

    /**
     * PhotoSize constructor.
     * @param string $file_id
     * @param string $file_unique_id
     * @param int $width
     * @param int $height
     */
    public function __construct(string $file_id, string $file_unique_id, int $width, int $height)
    {
        $this->file_id = $file_id;
        $this->file_unique_id = $file_unique_id;
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @param int $file_size
     */
    public function setFileSize(int $file_size): void
    {
        $this->file_size = $file_size;
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
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @return int
     */
    public function getFileSize(): int
    {
        return $this->file_size;
    }



}