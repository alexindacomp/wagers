<?php

namespace Wagers\MQ\Producer;

use App\MQStore\MessageInterface;
use OldSound\RabbitMqBundle\RabbitMq\Producer as BaseProducer;

/**
 * Class Producer
 */
class Producer extends BaseProducer
{
    /**
     * @param MessageInterface $message
     * @param string           $routingKey
     * @param array            $additionalProperties
     * @param array|null       $headers
     *
     * @throws \Exception
     */
    public function publish($message, $routingKey = '', $additionalProperties = array(), array $headers = null)
    {
        if (!$message instanceof MessageInterface) {
            throw new \Exception('Message must implement MessageInterface or extends AbstractMessage.');
        } else {
            parent::publish($message->toJson(), $routingKey, $additionalProperties, $headers);
        }
    }
}
