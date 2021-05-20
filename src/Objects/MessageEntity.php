<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class MessageEntity
 *
 * @property string|null language
 * @property User|null user
 * @property string|null url
 * @property int length
 * @property int offset
 * @property string type
 *
 * @package Parakhatdin\Bot\Objects
 */
class MessageEntity extends ObjectAbstract
{
    /**
     * MessageEntity constructor.
     */
    public function __construct
    (
        string $type,
        int $offset,
        int $length,
        ?string $url,
        ?User $user,
        ?string $language
    )
    {
        $this->type = $type;
        $this->offset = $offset;
        $this->length = $length;
        $this->url = $url;
        $this->user = $user;
        $this->language = $language;
    }


    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}