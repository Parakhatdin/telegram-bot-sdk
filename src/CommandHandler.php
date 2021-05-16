<?php


namespace Parakhatdin\Telegram;


use Parakhatdin\Telegram\Objects\Update;

class CommandHandler extends Handler
{

    /**
     * @var callable
     */
    public $callback;
    /**
     * @var Update
     */
    protected $update;

    /**
     * CommandHandler constructor.
     * @param string $command
     * @param callable $callback
     */
    public function __construct(string $command, callable $callback)
    {
        $this->callback = $callback;
    }

    public function isFit(Update $update): bool
    {
        if (true) {
            $this->update = $update;
            $this->callback();
            return true;
        }
        return false;
    }

    protected function callback(): void
    {
        call_user_func($this->callback, $this->update);
    }
}