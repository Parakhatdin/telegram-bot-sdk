<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class MessageEntity
 * @package Parakhatdin\Bot\Objects
 */
class MessageEntity
{
    /**
     * @var string
     */
    private $type;
    /**
     * @var int
     */
    private $offset;
    /**
     * @var int
     */
    private $length;
    /**
     * @var string
     */
    private $url;
    /**
     * @var User
     */
    private $user;
    /**
     * @var string
     */
    private $language;

    /**
     * MessageEntity constructor.
     * @param string $type
     * @param int $offset
     * @param int $length
     */
    public function __construct(string $type, int $offset, int $length)
    {
        $this->type = $type;
        $this->offset = $offset;
        $this->length = $length;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    /**
     * @param string $language
     */
    public function setLanguage(string $language): void
    {
        $this->language = $language;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * @return int
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }



}