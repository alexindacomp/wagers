<?php

namespace Wagers\Enum;

/**
 * Class CurrencyEnum
 */
abstract class CurrencyEnum extends AbstractEnum
{
    public const BTC = 100;
    public const YANDEX = 1;
    public const QIWI = 42;
    public const VISA_MASTERCARD = 43;

    /**
     * @var array
     */
    public static $currencies = [
        self::BTC => 'BTC',
        self::YANDEX => 'Yandex',
        self::QIWI => 'QIWI',
        self::VISA_MASTERCARD => 'Visa / Mastercard'
    ];
}
