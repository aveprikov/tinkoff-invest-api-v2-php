<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: signals.proto

namespace Tinkoff\Invest\V1;

use UnexpectedValueException;

/**
 *Статус сигнала.
 *
 * Protobuf type <code>tinkoff.public.invest.api.contract.v1.SignalState</code>
 */
class SignalState
{
    /**
     *Не определен.
     *
     * Generated from protobuf enum <code>SIGNAL_STATE_UNSPECIFIED = 0;</code>
     */
    const SIGNAL_STATE_UNSPECIFIED = 0;
    /**
     *Активный сигнал.
     *
     * Generated from protobuf enum <code>SIGNAL_STATE_ACTIVE = 1;</code>
     */
    const SIGNAL_STATE_ACTIVE = 1;
    /**
     *Закрытый сигнал.
     *
     * Generated from protobuf enum <code>SIGNAL_STATE_CLOSED = 2;</code>
     */
    const SIGNAL_STATE_CLOSED = 2;
    /**
     *Все состояния.
     *
     * Generated from protobuf enum <code>SIGNAL_STATE_ALL = 3;</code>
     */
    const SIGNAL_STATE_ALL = 3;

    private static $valueToName = [
        self::SIGNAL_STATE_UNSPECIFIED => 'SIGNAL_STATE_UNSPECIFIED',
        self::SIGNAL_STATE_ACTIVE => 'SIGNAL_STATE_ACTIVE',
        self::SIGNAL_STATE_CLOSED => 'SIGNAL_STATE_CLOSED',
        self::SIGNAL_STATE_ALL => 'SIGNAL_STATE_ALL',
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

