<?php


namespace Parakhatdin\Telegram\AvailableTypes;


/**
 * Class VoiceChatParticipantsInvited
 * @package Parakhatdin\Telegram\AvailableTypes
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