<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class Contact
 * @package Parakhatdin\Bot\Objects
 */
class Contact
{
    /**
     * @var string
     */
    private $phone_number;
    /**
     * @var string
     */
    private $first_name;
    /**
     * @var string
     */
    private $last_name;
    /**
     * @var int
     */
    private $user_id;
    /**
     * @var string
     */
    private $vcard;

    /**
     * Contact constructor.
     * @param string $phone_number
     * @param string $first_name
     */
    public function __construct(string $phone_number, string $first_name)
    {
        $this->phone_number = $phone_number;
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
     * @param int $user_id
     */
    public function setUserId(int $user_id): void
    {
        $this->user_id = $user_id;
    }

    /**
     * @param string $vcard
     */
    public function setVcard(string $vcard): void
    {
        $this->vcard = $vcard;
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phone_number;
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
     * @return int
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }

    /**
     * @return string
     */
    public function getVcard(): string
    {
        return $this->vcard;
    }



}