<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class InputMediaAnimation
 * @package Parakhatdin\Bot\Objects
 */
class InputMediaAnimation
{
    /**
     * @var string
     */
    private $type;
    /**
     * @var string
     */
    private $media;
    /**
     * @var InputFile | string
     */
    private $thumb;
    /**
     * @var string
     */
    private $caption;
    /**
     * @var string
     */
    private $parse_mode;
    /**
     * @var MessageEntity[]
     */
    private $caption_entities;
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
     * InputMediaAnimation constructor.
     * @param string $type
     * @param string $media
     */
    public function __construct(string $type, string $media)
    {
        $this->type = $type;
        $this->media = $media;
    }

    /**
     * @param InputFile|string $thumb
     */
    public function setThumb($thumb): void
    {
        $this->thumb = $thumb;
    }

    /**
     * @param string $caption
     */
    public function setCaption(string $caption): void
    {
        $this->caption = $caption;
    }

    /**
     * @param string $parse_mode
     */
    public function setParseMode(string $parse_mode): void
    {
        $this->parse_mode = $parse_mode;
    }

    /**
     * @param MessageEntity[] $caption_entities
     */
    public function setCaptionEntities(array $caption_entities): void
    {
        $this->caption_entities = $caption_entities;
    }

    /**
     * @param int $width
     */
    public function setWidth(int $width): void
    {
        $this->width = $width;
    }

    /**
     * @param int $height
     */
    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    /**
     * @param int $duration
     */
    public function setDuration(int $duration): void
    {
        $this->duration = $duration;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getMedia(): string
    {
        return $this->media;
    }

    /**
     * @return InputFile|string
     */
    public function getThumb()
    {
        return $this->thumb;
    }

    /**
     * @return string
     */
    public function getCaption(): string
    {
        return $this->caption;
    }

    /**
     * @return string
     */
    public function getParseMode(): string
    {
        return $this->parse_mode;
    }

    /**
     * @return MessageEntity[]
     */
    public function getCaptionEntities(): array
    {
        return $this->caption_entities;
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




}