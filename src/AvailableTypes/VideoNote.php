<?php


namespace Parakhatdin\Telegram\AvailableTypes;


/**
 * Class VideoNote
 * @package Parakhatdin\Telegram\AvailableTypes
 */
class VideoNote
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
    private $length;
    /**
     * @var int
     */
    private $duration;
    /**
     * @var PhotoSize
     */
    private $thumb;
    /**
     * @var int
     */
    private $file_size;

    /**
     * VideoNote constructor.
     * @param string $file_id
     * @param string $file_unique_id
     * @param int $length
     * @param int $duration
     */
    public function __construct(string $file_id, string $file_unique_id, int $length, int $duration)
    {
        $this->file_id = $file_id;
        $this->file_unique_id = $file_unique_id;
        $this->length = $length;
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
    public function getLength(): int
    {
        return $this->length;
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
     * @return int
     */
    public function getFileSize(): int
    {
        return $this->file_size;
    }




}