<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class User
 * @package Parakhatdin\Bot\Objects
 */
class User
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var bool
     */
    private $is_bot;
    /**
     * @var string
     */
    private $first_name;
    /**
     * @var string
     */
    private $last_name;
    /**
     * @var string
     */
    private $username;
    /**
     * @var string
     */
    private $language_code;
    /**
     * @var bool
     */
    private $can_join_groups;
    /**
     * @var bool
     */
    private $can_read_all_group_messages;
    /**
     * @var bool
     */
    private $supports_inline_queries;

    /**
     * User constructor.
     * @param int $id
     * @param bool $is_bot
     * @param string $first_name
     */
    public function __construct(int $id, bool $is_bot, string $first_name)
    {
        $this->id = $id;
        $this->is_bot = $is_bot;
        $this->first_name = $first_name;
    }

    /**
     * @param string $last_name
     */
    public function setLastName(string $last_name): void
    {
        $this->last_name = $last_name;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @param string $language_code
     */
    public function setLanguageCode(string $language_code): void
    {
        $this->language_code = $language_code;
    }

    /**
     * @param bool $can_join_groups
     */
    public function setCanJoinGroups(bool $can_join_groups): void
    {
        $this->can_join_groups = $can_join_groups;
    }

    /**
     * @param bool $can_read_all_group_messages
     */
    public function setCanReadAllGroupMessages(bool $can_read_all_group_messages): void
    {
        $this->can_read_all_group_messages = $can_read_all_group_messages;
    }

    /**
     * @param bool $supports_inline_queries
     */
    public function setSupportsInlineQueries(bool $supports_inline_queries): void
    {
        $this->supports_inline_queries = $supports_inline_queries;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return bool
     */
    public function isIsBot(): bool
    {
        return $this->is_bot;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->first_name;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->last_name;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getLanguageCode(): string
    {
        return $this->language_code;
    }

    /**
     * @return bool
     */
    public function isCanJoinGroups(): bool
    {
        return $this->can_join_groups;
    }

    /**
     * @return bool
     */
    public function isCanReadAllGroupMessages(): bool
    {
        return $this->can_read_all_group_messages;
    }

    /**
     * @return bool
     */
    public function isSupportsInlineQueries(): bool
    {
        return $this->supports_inline_queries;
    }



}