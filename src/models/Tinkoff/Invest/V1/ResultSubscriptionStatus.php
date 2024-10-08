<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common.proto

namespace Tinkoff\Invest\V1;

use UnexpectedValueException;

/**
 * Protobuf type <code>tinkoff.public.invest.api.contract.v1.ResultSubscriptionStatus</code>
 */
class ResultSubscriptionStatus
{
    /**
     *Статус подписки не определен.
     *
     * Generated from protobuf enum <code>RESULT_SUBSCRIPTION_STATUS_UNSPECIFIED = 0;</code>
     */
    const RESULT_SUBSCRIPTION_STATUS_UNSPECIFIED = 0;
    /**
     *Подписка успешно установлена.
     *
     * Generated from protobuf enum <code>RESULT_SUBSCRIPTION_STATUS_OK = 1;</code>
     */
    const RESULT_SUBSCRIPTION_STATUS_OK = 1;
    /**
     *Ошибка подписки
     *
     * Generated from protobuf enum <code>RESULT_SUBSCRIPTION_STATUS_ERROR = 13;</code>
     */
    const RESULT_SUBSCRIPTION_STATUS_ERROR = 13;

    private static $valueToName = [
        self::RESULT_SUBSCRIPTION_STATUS_UNSPECIFIED => 'RESULT_SUBSCRIPTION_STATUS_UNSPECIFIED',
        self::RESULT_SUBSCRIPTION_STATUS_OK => 'RESULT_SUBSCRIPTION_STATUS_OK',
        self::RESULT_SUBSCRIPTION_STATUS_ERROR => 'RESULT_SUBSCRIPTION_STATUS_ERROR',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

