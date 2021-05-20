<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class InputMediaVideo
 *
 * @property bool|null supports_streaming
 * @property int|null duration
 * @property int|null height
 * @property int|null width
 * @property MessageEntity[]|null caption_entities
 * @property string|null parse_mode
 * @property string|null caption
 * @property InputFile|string|null thumb
 * @property string media
 * @property string type
 *
 * @package Parakhatdin\Bot\Objects
 */
class InputMediaVideo extends ObjectAbstract
{
    /**
     * InputMediaVideo constructor.
     */
    public function __construct
    (
        string $type,
        string $media,
        InputFile|string|null $thumb,
        ?string $caption,
        ?string $parse_mode,
        ?array $caption_entities,
        ?int $width,
        ?int $height,
        ?int $duration,
        ?bool $supports_streaming
    )
    {
        $this->type = $type;
        $this->media = $media;
        $this->thumb = $thumb;
        $this->caption = $caption;
        $this->parse_mode = $parse_mode;
        $this->caption_entities = $caption_entities;
        $this->width = $width;
        $this->height = $height;
        $this->duration = $duration;
        $this->supports_streaming = $supports_streaming;
    }


    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}