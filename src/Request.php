<?php


namespace Parakhatdin\Telegram;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Parakhatdin\Telegram\AvailableMethods\SendMessage;
use Parakhatdin\Telegram\AvailableMethods\GetMe;

class Request
{
    /**
     * @var Telegram
     */
    private static $telegram;
    /**
     * @var Client
     */
    private static $client;

    const BASE_TELEGRAM_URI = "https://api.telegram.org";

    /**
     * @param Telegram $telegram
     */
    public static function init (Telegram $telegram)
    {
        self::$telegram = $telegram;
        self::$client = new Client(['base_uri' => self::BASE_TELEGRAM_URI]);
    }

    public function getMe ()
    {
        return new GetMe();
    }

    public function sendMessage ($chat_id, $text)
    {
        return new SendMessage($chat_id, $text);
    }

    public static function execute (string $method, $parameters)
    {
        try {
            return self::$client->post('/bot' . self::$telegram->getBotToken() . '/' . $method, $parameters);
        } catch (GuzzleException $e) {
        }
    }
}