<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class ForceReply
 * @package Parakhatdin\Bot\Objects
 */
class ForceReply
{
    /**
     * @var true
     */
    private $force_reply;
    /**
     * @var bool
     */
    private $selective;

    /**
     * ForceReply constructor.
     * @param true $force_reply
     */
    public function __construct($force_reply)
    {
        $this->force_reply = $force_reply;
    }

    /**
     * @param bool $selective
     */
    public function setSelective(bool $selective): void
    {
        $this->selective = $selective;
    }

    /**
     * @return true
     */
    public function getForceReply()
    {
        return $this->force_reply;
    }

    /**
     * @return bool
     */
    public function isSelective(): bool
    {
        return $this->selective;
    }



}