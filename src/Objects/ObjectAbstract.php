<?php


namespace Parakhatdin\Telegram\Objects;


abstract class ObjectAbstract
{
    public static abstract function makeFromArray(array $data);
}