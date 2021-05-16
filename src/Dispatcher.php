<?php


namespace Parakhatdin\Telegram;


use Parakhatdin\Telegram\Objects\Update;

class Dispatcher
{
    /**
     * @var HandlerInterface[]
     */
    protected $handlers;

    /**
     * @param HandlerInterface $handler
     */
    public function addHandler(HandlerInterface $handler): void
    {
        $this->handlers[] = $handler;
    }

    public function handle(Update $update)
    {
        foreach ($this->handlers as $handler) {
            if ($handler->isFit($update)) {
                break;
            }
        }
    }
}