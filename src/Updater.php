<?php


namespace Parakhatdin\Telegram;


use Parakhatdin\Telegram\Objects\ObjectAbstract;
use Parakhatdin\Telegram\Objects\Update;
use Psr\Http\Message\ResponseInterface;

class Updater
{
    /**
     * @var Bot
     */
    public $bot;

    /**
     * @var Dispatcher
     */
    public $dispatcher;

    /**
     * Updater constructor.
     * @param Bot $bot
     */
    public function __construct(Bot $bot)
    {
        $this->bot = $bot;
        $this->dispatcher = new Dispatcher();
    }

    private function messageReceived(Update $update)
    {
        $this->dispatcher->handle($update);
    }

    /**
     * @param ResponseInterface $response
     * @return array
     */
    private function getResponseBody(ResponseInterface $response): array
    {
        return json_decode($response->getBody(), true);
    }

    public function startPolling()
    {
        $request = new Request($this->bot);
        $response = $request->getUpdates()->execute();
        $response_body = $this->getResponseBody($response);
        $last_update_id = 0;
        while ($response->getStatusCode() == 200) {
            if ($response_body["ok"] && !empty($response_body["result"])) {
                $last_update_id = end($response_body["result"])["update_id"];
                $this->messageReceived(Update::makeFromArray($response_body["result"][0]));
            }
            $response = $request->getUpdates()->setOffset($last_update_id + 1)->setLimit(1)->setTimeout(100)->execute();
            $response_body = $this->getResponseBody($response);
        }
    }
}