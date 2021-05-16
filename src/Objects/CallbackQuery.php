<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class CallbackQuery
 * @package Parakhatdin\Bot\Objects
 */
class CallbackQuery
{
    /**
     * @var string
     */
    private $id;
    /**
     * @var User
     */
    private $from;
    /**
     * @var Message
     */
    private $message;
    /**
     * @var string
     */
    private $inline_message_id;
    /**
     * @var string
     */
    private $chat_instance;
    /**
     * @var string
     */
    private $data;
    /**
     * @var string
     */
    private $game_short_name;

    /**
     * CallbackQuery constructor.
     * @param string $id
     * @param User $from
     * @param string $chat_instance
     */
    public function __construct(string $id, User $from, string $chat_instance)
    {
        $this->id = $id;
        $this->from = $from;
        $this->chat_instance = $chat_instance;
    }

    /**
     * @param Message $message
     */
    public function setMessage(Message $message): void
    {
        $this->message = $message;
    }

    /**
     * @param string $inline_message_id
     */
    public function setInlineMessageId(string $inline_message_id): void
    {
        $this->inline_message_id = $inline_message_id;
    }

    /**
     * @param string $data
     */
    public function setData(string $data): void
    {
        $this->data = $data;
    }

    /**
     * @param string $game_short_name
     */
    public function setGameShortName(string $game_short_name): void
    {
        $this->game_short_name = $game_short_name;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return User
     */
    public function getFrom(): User
    {
        return $this->from;
    }

    /**
     * @return Message
     */
    public function getMessage(): Message
    {
        return $this->message;
    }

    /**
     * @return string
     */
    public function getInlineMessageId(): string
    {
        return $this->inline_message_id;
    }

    /**
     * @return string
     */
    public function getChatInstance(): string
    {
        return $this->chat_instance;
    }

    /**
     * @return string
     */
    public function getData(): string
    {
        return $this->data;
    }

    /**
     * @return string
     */
    public function getGameShortName(): string
    {
        return $this->game_short_name;
    }




}