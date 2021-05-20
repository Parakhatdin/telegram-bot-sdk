<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class ChatInviteLink
 *
 * @property int|null member_limit
 * @property int|null expire_date
 * @property bool is_revoked
 * @property bool is_primary
 * @property User creator
 * @property string invite_link
 *
 * @package Parakhatdin\Bot\Objects
 */
class ChatInviteLink extends ObjectAbstract
{

    /**
     * ChatInviteLink constructor.
     */
    public function __construct
    (
        string $invite_link,
        User $creator,
        bool $is_primary,
        bool $is_revoked,
        ?int $expire_date,
        ?int $member_limit
    )
    {
        $this->invite_link = $invite_link;
        $this->creator = $creator;
        $this->is_primary = $is_primary;
        $this->is_revoked = $is_revoked;
        $this->expire_date = $expire_date;
        $this->member_limit = $member_limit;
    }


    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}