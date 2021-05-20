<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class VoiceChatParticipantsInvited
 *
 * @property User[] users
 *
 * @package Parakhatdin\Bot\Objects
 */
class VoiceChatParticipantsInvited extends ObjectAbstract
{
    /**
     * VoiceChatParticipantsInvited constructor.
     */
    public function __construct
    (
        array $users
    )
    {
        $this->users = $users;
    }


    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}