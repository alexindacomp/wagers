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
        $this->service = \getenv('PAYMENT_HOST');
    }

    /**
     * @return string
     */
    public function toJson(): string
    {
        return \json_encode($this, true);
    }
}
