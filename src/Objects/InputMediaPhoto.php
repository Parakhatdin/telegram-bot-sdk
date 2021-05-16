<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class InputMediaPhoto
 * @package Parakhatdin\Bot\Objects
 */
class InputMediaPhoto
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
     * InputMediaPhoto constructor.
     * @param string $type
     * @param string $media
     */
    public function __construct(string $type, string $media)
    {
        $this->type = $type;
        $this->media = $media;
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



}