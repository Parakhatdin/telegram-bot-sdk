<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class Video
 * @package Parakhatdin\Bot\Objects
 */
class Video
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
    private $duration;
    /**
     * @var PhotoSize
     */
    private $thumb;
    /**
     * @var string
     */
    private $file_name;
    /**
     * @var string
     */
    private $mime_type;
    /**
     * @var int
     */
    private $file_size;

    /**
     * Video constructor.
     * @param string $file_id
     * @param string $file_unique_id
     * @param int $width
     * @param int $height
     * @param int $duration
     */
    public function __construct(string $file_id, string $file_unique_id, int $width, int $height, int $duration)
    {
        $this->file_id = $file_id;
        $this->file_unique_id = $file_unique_id;
        $this->width = $width;
        $this->height = $height;
        $this->duration = $duration;
    }

    /**
     * @param PhotoSize $thumb
     */
    public function setThumb(PhotoSize $thumb): void
    {
        $this->thumb = $thumb;
    }

    /**
     * @param string $file_name
     */
    public function setFileName(string $file_name): void
    {
        $this->file_name = $file_name;
    }

    /**
     * @param string $mime_type
     */
    public function setMimeType(string $mime_type): void
    {
        $this->mime_type = $mime_type;
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
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * @return PhotoSize
     */
    public function getThumb(): PhotoSize
    {
        return $this->thumb;
    }

    /**
     * @return string
     */
    public function getFileName(): string
    {
        return $this->file_name;
    }

    /**
     * @return string
     */
    public function getMimeType(): string
    {
        return $this->mime_type;
    }

    /**
     * @return int
     */
    public function getFileSize(): int
    {
        return $this->file_size;
    }



}