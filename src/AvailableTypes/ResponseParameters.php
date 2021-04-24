<?php


namespace Parakhatdin\Telegram\AvailableTypes;


/**
 * Class ResponseParameters
 * @package Parakhatdin\Telegram\AvailableTypes
 */
class ResponseParameters
{
    /**
     * @var int
     */
    private $migrate_to_chat_id;
    /**
     * @var int
     */
    private $retry_after;

    /**
     * @return int
     */
    public function getMigrateToChatId(): int
    {
        return $this->migrate_to_chat_id;
    }

    /**
     * @param int $migrate_to_chat_id
     */
    public function setMigrateToChatId(int $migrate_to_chat_id): void
    {
        $this->migrate_to_chat_id = $migrate_to_chat_id;
    }

    /**
     * @return int
     */
    public function getRetryAfter(): int
    {
        return $this->retry_after;
    }

    /**
     * @param int $retry_after
     */
    public function setRetryAfter(int $retry_after): void
    {
        $this->retry_after = $retry_after;
    }


}