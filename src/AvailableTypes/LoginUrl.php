<?php


namespace Parakhatdin\Telegram\AvailableTypes;


/**
 * Class LoginUrl
 * @package Parakhatdin\Telegram\AvailableTypes
 */
class LoginUrl
{
    /**
     * @var string
     */
    private $url;
    /**
     * @var string
     */
    private $forward_text;
    /**
     * @var string
     */
    private $bot_username;
    /**
     * @var bool
     */
    private $request_write_access;

    /**
     * LoginUrl constructor.
     * @param string $url
     */
    public function __construct(string $url)
    {
        $this->url = $url;
    }

    /**
     * @param string $forward_text
     */
    public function setForwardText(string $forward_text): void
    {
        $this->forward_text = $forward_text;
    }

    /**
     * @param string $bot_username
     */
    public function setBotUsername(string $bot_username): void
    {
        $this->bot_username = $bot_username;
    }

    /**
     * @param bool $request_write_access
     */
    public function setRequestWriteAccess(bool $request_write_access): void
    {
        $this->request_write_access = $request_write_access;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getForwardText(): string
    {
        return $this->forward_text;
    }

    /**
     * @return string
     */
    public function getBotUsername(): string
    {
        return $this->bot_username;
    }

    /**
     * @return bool
     */
    public function isRequestWriteAccess(): bool
    {
        return $this->request_write_access;
    }



}