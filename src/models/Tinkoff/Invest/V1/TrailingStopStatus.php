<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: stoporders.proto

namespace Tinkoff\Invest\V1;

use UnexpectedValueException;

/**
 *Статус трейлинг-стопа.
 *
 * Protobuf type <code>tinkoff.public.invest.api.contract.v1.TrailingStopStatus</code>
 */
class TrailingStopStatus
{
    /**
     *Значение не указано.
     *
     * Generated from protobuf enum <code>TRAILING_STOP_UNSPECIFIED = 0;</code>
     */
    const TRAILING_STOP_UNSPECIFIED = 0;
    /**
     *Активный.
     *
     * Generated from protobuf enum <code>TRAILING_STOP_ACTIVE = 1;</code>
     */
    const TRAILING_STOP_ACTIVE = 1;
    /**
     *Активированный.
     *
     * Generated from protobuf enum <code>TRAILING_STOP_ACTIVATED = 2;</code>
     */
    const TRAILING_STOP_ACTIVATED = 2;

    private static $valueToName = [
        self::TRAILING_STOP_UNSPECIFIED => 'TRAILING_STOP_UNSPECIFIED',
        self::TRAILING_STOP_ACTIVE => 'TRAILING_STOP_ACTIVE',
        self::TRAILING_STOP_ACTIVATED => 'TRAILING_STOP_ACTIVATED',
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

