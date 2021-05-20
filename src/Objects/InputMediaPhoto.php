<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class InputMediaPhoto
 *
 * @property MessageEntity[]|null caption_entities
 * @property string|null parse_mode
 * @property string|null caption
 * @property string media
 * @property string type
 *
 * @package Parakhatdin\Bot\Objects
 */
class InputMediaPhoto extends ObjectAbstract
{
    /**
     * InputMediaPhoto constructor.
     */
    public function __construct
    (
        string $type,
        string $media,
        ?string $caption,
        ?string $parse_mode,
        ?array $caption_entities
    )
    {
        $this->type = $type;
        $this->media = $media;
        $this->caption = $caption;
        $this->parse_mode = $parse_mode;
        $this->caption_entities = $caption_entities;
    }


    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}