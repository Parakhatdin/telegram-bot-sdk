<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class InputMediaAnimation
 *
 * @property int|null duration
 * @property int|null height
 * @property int|null width
 * @property array|null caption_entities
 * @property string|null parse_mode
 * @property string|null caption
 * @property InputFile|string|null thumb
 * @property string media
 * @property string type
 *
 * @package Parakhatdin\Bot\Objects
 */
class InputMediaAnimation extends ObjectAbstract
{
    /**
     * InputMediaAnimation constructor.
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
        ?int $duration
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
    }


    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}