<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class PollAnswer
 *
 * @property array option_ids
 * @property User user
 * @property string pool_id
 *
 * @package Parakhatdin\Bot\Objects
 */
class PollAnswer extends ObjectAbstract
{
    /**
     * PollAnswer constructor.
     */
    public function __construct
    (
        string $pool_id,
        User $user,
        array $option_ids
    )
    {
        $this->pool_id = $pool_id;
        $this->user = $user;
        $this->option_ids = $option_ids;
    }

    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}