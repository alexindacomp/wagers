<?php

namespace Wagers\MQ\Store;

/**
 * Interface MessageInterface
 */
interface MessageInterface
{
    /**
     * This method must return json serialized object.
     * json_encode($this)
     *
     * @return string
     */
    public function toJson(): string;
}
