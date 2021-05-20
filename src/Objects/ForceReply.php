<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class ForceReply
 *
 * @property bool|null selective
 * @property true force_reply
 *
 * @package Parakhatdin\Bot\Objects
 */
class ForceReply extends ObjectAbstract
{
    /**
     * ForceReply constructor.
     */
    public function __construct
    (
        $force_reply,
        ?bool $selective
    )
    {
        $this->force_reply = $force_reply;
        $this->selective = $selective;
    }


    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}