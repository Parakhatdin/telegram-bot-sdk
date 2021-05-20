<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class InputMediaAudio
 *
 * @property string|null title
 * @property string|null performer
 * @property int|null duration
 * @property array|null caption_entities
 * @property string|null parse_mode
 * @property string|null caption
 * @property InputFile|string|null thumb
 * @property string media
 * @property string type
 *
 * @package Parakhatdin\Bot\Objects
 */
class InputMediaAudio extends ObjectAbstract
{
    /**
     * InputMediaAudio constructor.
     */
    public function __construct
    (
        string $type,
        string $media,
        InputFile|string|null $thumb,
        ?string $caption,
        ?string $parse_mode,
        ?array $caption_entities,
        ?int $duration,
        ?string $performer,
        ?string $title)
    {
        $this->type = $type;
        $this->media = $media;
        $this->thumb = $thumb;
        $this->caption = $caption;
        $this->parse_mode = $parse_mode;
        $this->caption_entities = $caption_entities;
        $this->duration = $duration;
        $this->performer = $performer;
        $this->title = $title;
    }


    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}