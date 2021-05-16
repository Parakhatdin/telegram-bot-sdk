<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class VoiceChatParticipantsInvited
 * @package Parakhatdin\Bot\Objects
 */
class VoiceChatParticipantsInvited
{
    /**
     * @var User[]
     */
    private $users;

    /**
     * @param User[] $users
     */
    public function setUsers(array $users): void
    {
        $this->users = $users;
    }

    /**
     * @return User[]
     */
    public function getUsers(): array
    {
        return $this->users;
    }


}