<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class LoginUrl
 *
 * @property bool|null request_write_access
 * @property string|null bot_username
 * @property string|null forward_text
 * @property string url
 *
 * @package Parakhatdin\Bot\Objects
 */
class LoginUrl extends ObjectAbstract
{
    /**
     * LoginUrl constructor.
     */
    public function __construct
    (
        string $url,
        ?string $forward_text,
        ?string $bot_username,
        ?bool $request_write_access
    )
    {
        $this->url = $url;
        $this->forward_text = $forward_text;
        $this->bot_username = $bot_username;
        $this->request_write_access = $request_write_access;
    }


    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}