<?php


namespace Parakhatdin\Telegram\AvailableTypes;


/**
 * Class InputMediaDocument
 * @package Parakhatdin\Telegram\AvailableTypes
 */
class InputMediaDocument
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
     * @var bool
     */
    private $disable_content_type_detection;

    /**
     * InputMediaDocument constructor.
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
     * @param bool $disable_content_type_detection
     */
    public function setDisableContentTypeDetection(bool $disable_content_type_detection): void
    {
        $this->disable_content_type_detection = $disable_content_type_detection;
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
     * @return bool
     */
    public function isDisableContentTypeDetection(): bool
    {
        return $this->disable_content_type_detection;
    }




}