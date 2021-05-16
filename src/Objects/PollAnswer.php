<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class PollAnswer
 * @package Parakhatdin\Bot\Objects
 */
class PollAnswer
{
    /**
     * @var string
     */
    private $pool_id;
    /**
     * @var User
     */
    private $user;
    /**
     * @var int[]
     */
    private $option_ids;

    /**
     * PollAnswer constructor.
     * @param string $pool_id
     * @param User $user
     * @param int[] $option_ids
     */
    public function __construct(string $pool_id, User $user, array $option_ids)
    {
        $this->pool_id = $pool_id;
        $this->user = $user;
        $this->option_ids = $option_ids;
    }

    /**
     * @return string
     */
    public function getPoolId(): string
    {
        return $this->pool_id;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @return int[]
     */
    public function getOptionIds(): array
    {
        return $this->option_ids;
    }



}