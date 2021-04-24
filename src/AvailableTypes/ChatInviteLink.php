<?php


namespace Parakhatdin\Telegram\AvailableTypes;


/**
 * Class ChatInviteLink
 * @package Parakhatdin\Telegram\AvailableTypes
 */
class ChatInviteLink
{
    /**
     * @var string
     */
    private $invite_link;
    /**
     * @var User
     */
    private $creator;
    /**
     * @var bool
     */
    private $is_primary;
    /**
     * @var bool
     */
    private $is_revoked;
    /**
     * @var int
     */
    private $expire_date;
    /**
     * @var int
     */
    private $member_limit;

    /**
     * ChatInviteLink constructor.
     * @param string $invite_link
     * @param User $creator
     * @param bool $is_primary
     * @param bool $is_revoked
     */
    public function __construct(string $invite_link, User $creator, bool $is_primary, bool $is_revoked)
    {
        $this->invite_link = $invite_link;
        $this->creator = $creator;
        $this->is_primary = $is_primary;
        $this->is_revoked = $is_revoked;
    }

    /**
     * @param int $expire_date
     */
    public function setExpireDate(int $expire_date): void
    {
        $this->expire_date = $expire_date;
    }

    /**
     * @param int $member_limit
     */
    public function setMemberLimit(int $member_limit): void
    {
        $this->member_limit = $member_limit;
    }

    /**
     * @return string
     */
    public function getInviteLink(): string
    {
        return $this->invite_link;
    }

    /**
     * @return User
     */
    public function getCreator(): User
    {
        return $this->creator;
    }

    /**
     * @return bool
     */
    public function isIsPrimary(): bool
    {
        return $this->is_primary;
    }

    /**
     * @return bool
     */
    public function isIsRevoked(): bool
    {
        return $this->is_revoked;
    }

    /**
     * @return int
     */
    public function getExpireDate(): int
    {
        return $this->expire_date;
    }

    /**
     * @return int
     */
    public function getMemberLimit(): int
    {
        return $this->member_limit;
    }



}