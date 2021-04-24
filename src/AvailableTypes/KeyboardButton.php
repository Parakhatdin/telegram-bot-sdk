<?php


namespace Parakhatdin\Telegram\AvailableTypes;


/**
 * Class KeyboardButton
 * @package Parakhatdin\Telegram\AvailableTypes
 */
class KeyboardButton
{
    /**
     * @var string
     */
    private $text;
    /**
     * @var bool
     */
    private $request_contact;
    /**
     * @var bool
     */
    private $request_location;
    /**
     * @var KeyboardButtonPollType
     */
    private $request_poll;

    /**
     * KeyboardButton constructor.
     * @param string $text
     */
    public function __construct(string $text)
    {
        $this->text = $text;
    }

    /**
     * @param bool $request_contact
     */
    public function setRequestContact(bool $request_contact): void
    {
        $this->request_contact = $request_contact;
    }

    /**
     * @param bool $request_location
     */
    public function setRequestLocation(bool $request_location): void
    {
        $this->request_location = $request_location;
    }

    /**
     * @param KeyboardButtonPollType $request_poll
     */
    public function setRequestPoll(KeyboardButtonPollType $request_poll): void
    {
        $this->request_poll = $request_poll;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return bool
     */
    public function isRequestContact(): bool
    {
        return $this->request_contact;
    }

    /**
     * @return bool
     */
    public function isRequestLocation(): bool
    {
        return $this->request_location;
    }

    /**
     * @return KeyboardButtonPollType
     */
    public function getRequestPoll(): KeyboardButtonPollType
    {
        return $this->request_poll;
    }



}