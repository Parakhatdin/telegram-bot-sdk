<?php


namespace Parakhatdin\Telegram\Methods;


/**
 * Class GetUpdates
 * @package Parakhatdin\Telegram\Methods
 */
class GetUpdates extends Method
{
    /**
     * @var int
     */
    private $offset;
    /**
     * @var int
     */
    private $limit;
    /**
     * @var int
     */
    private $timeout;
    /**
     * @var string[]
     */
    private $allowed_updated;

    /**
     * @param int $offset
     */
    public function setOffset(int $offset): GetUpdates
    {
        $this->offset = $offset;
        return $this;
    }

    /**
     * @param int $limit
     */
    public function setLimit(int $limit): GetUpdates
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * @param int $timeout
     */
    public function setTimeout(int $timeout): GetUpdates
    {
        $this->timeout = $timeout;
        return $this;
    }

    /**
     * @param string[] $allowed_updated
     */
    public function setAllowedUpdated(array $allowed_updated): GetUpdates
    {
        $this->allowed_updated = $allowed_updated;
        return $this;
    }



    /**
     *
     */
    protected function params()
    {
        return [
            "offset" => $this->offset,
            "limit" => $this->limit,
            "timeout" => $this->timeout,
            "allowed_updates" => $this->allowed_updated
        ];
    }

    public function methodName(): string
    {
        return "getUpdates";
    }
}