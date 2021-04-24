<?php


namespace Parakhatdin\Telegram\AvailableMethods;


use Parakhatdin\Telegram\Request;

abstract class Method
{
    protected $method_name;

    public abstract function params();

    public function doIt ()
    {
        return Request::execute($this->method_name, ["query" =>$this->params()]);
    }
}