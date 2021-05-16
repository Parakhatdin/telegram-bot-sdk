<?php


namespace Parakhatdin\Telegram;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Parakhatdin\Telegram\Methods\GetUpdates;
use Parakhatdin\Telegram\Methods\SendMessage;
use Parakhatdin\Telegram\Methods\GetMe;

class Request
{
    /**
     * @var Bot
     */
    protected $bot;
    /**
     * @var Client
     */
    protected $client;

    const BASE_TELEGRAM_URI = "https://api.telegram.org";

    /**
     * Request constructor.
     * @param Bot $telegram
     */
    public function __construct(Bot $bot)
    {
        $this->bot = $bot;
        $this->client = new Client(['base_uri' => self::BASE_TELEGRAM_URI]);
    }



    public function getMe ()
    {
        return new GetMe();
    }

    public function sendMessage ($chat_id, $text)
    {
        $method = new SendMessage($chat_id, $text);
        $method->setRequest($this);
        return $method;
    }

    public function getUpdates ()
    {
        $method = new GetUpdates();
        $method->setRequest($this);
        return $method;
    }

    public function execute (string $method, $parameters): \Psr\Http\Message\ResponseInterface
    {
        try {
            return $this->client->post('/bot' . $this->bot->getBotToken() . '/' . $method, $parameters);
        } catch (GuzzleException $e) {
        }
    }
}