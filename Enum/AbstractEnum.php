<?php

namespace Wagers\Enum;

/**
 * Class AbstractEnum
 */
abstract class AbstractEnum
{
    /**
     * @return array
     * @throws \ReflectionException
     */
    public static function getConstants(): array
    {
        $reflection = new \ReflectionClass(static::class);
        return $reflection->getConstants();
    }
}