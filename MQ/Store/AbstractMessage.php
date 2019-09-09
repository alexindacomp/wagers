<?php

namespace Wagers\MQ\Store;

/**
 * Class AbstractMessage
 */
abstract class AbstractMessage implements MessageInterface
{
    /**
     * @var string
     */
    public $service;

    /**
     * @var string
     */
    public $created;

    /**
     * AbstractMessage constructor.
     *
     * @throws \Exception
     */
    public function __construct()
    {
        $this->created = (new \DateTime('now'))->format('Y-m-d H:i');
    }

    /**
     * @param string $service
     *
     * @return $this
     */
    public function setService(string $service)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * @return string
     */
    public function toJson(): string
    {
        return \json_encode($this, true);
    }
}
