<?php


namespace Parakhatdin\Telegram\Methods;


use Parakhatdin\Telegram\Request;

abstract class Method
{
    private $method_name;
    /**
     * @var Request
     */
    protected $request;

    protected abstract function params();

    /**
     * @param Request $request
     */
    public function setRequest(Request $request): void
    {
        $this->request = $request;
    }



    public function execute ()
    {
        return $this->request->execute($this->methodName(), ["query" =>$this->params()]);
    }

    abstract public function methodName(): string;
}