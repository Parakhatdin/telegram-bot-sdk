<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class InputMediaDocument
 *
 * @property bool|null disable_content_type_detection
 * @property MessageEntity[]|null caption_entities
 * @property string|null parse_mode
 * @property string|null caption
 * @property InputFile|string|null thumb
 * @property string media
 * @property string type
 *
 * @package Parakhatdin\Bot\Objects
 */
class InputMediaDocument extends ObjectAbstract
{
    /**
     * InputMediaDocument constructor.
     */
    public function __construct
    (
        string $type,
        string $media,
        InputFile|string|null $thumb,
        ?string $caption,
        ?string $parse_mode,
        ?array $caption_entities,
        ?bool $disable_content_type_detection
    )
    {
        $this->type = $type;
        $this->media = $media;
        $this->thumb = $thumb;
        $this->caption = $caption;
        $this->parse_mode = $parse_mode;
        $this->caption_entities = $caption_entities;
        $this->disable_content_type_detection = $disable_content_type_detection;
    }


    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}