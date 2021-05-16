<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class Audio
 * @package Parakhatdin\Bot\Objects
 */
class Audio
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
    private $duration;
    /**
     * @var string
     */
    private $performer;
    /**
     * @var string
     */
    private $title;
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
     * @var PhotoSize
     */
    private $thumb;

    /**
     * Audio constructor.
     * @param string $file_id
     * @param string $file_unique_id
     * @param int $duration
     */
    public function __construct(string $file_id, string $file_unique_id, int $duration)
    {
        $this->file_id = $file_id;
        $this->file_unique_id = $file_unique_id;
        $this->duration = $duration;
    }

    /**
     * @param string $performer
     */
    public function setPerformer(string $performer): void
    {
        $this->performer = $performer;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
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
     * @param PhotoSize $thumb
     */
    public function setThumb(PhotoSize $thumb): void
    {
        $this->thumb = $thumb;
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
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * @return string
     */
    public function getPerformer(): string
    {
        return $this->performer;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
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

    /**
     * @return PhotoSize
     */
    public function getThumb(): PhotoSize
    {
        return $this->thumb;
    }



}