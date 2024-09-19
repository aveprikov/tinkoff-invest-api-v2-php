<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: marketdata.proto

namespace Tinkoff\Invest\V1\GetTechAnalysisRequest;

use UnexpectedValueException;

/**
 *Интервал свечи.
 *
 * Protobuf type <code>tinkoff.public.invest.api.contract.v1.GetTechAnalysisRequest.IndicatorInterval</code>
 */
class IndicatorInterval
{
    /**
     *Интервал не определён.
     *
     * Generated from protobuf enum <code>INDICATOR_INTERVAL_UNSPECIFIED = 0;</code>
     */
    const INDICATOR_INTERVAL_UNSPECIFIED = 0;
    /**
     *1 минута.
     *
     * Generated from protobuf enum <code>INDICATOR_INTERVAL_ONE_MINUTE = 1;</code>
     */
    const INDICATOR_INTERVAL_ONE_MINUTE = 1;
    /**
     *5 минут.
     *
     * Generated from protobuf enum <code>INDICATOR_INTERVAL_FIVE_MINUTES = 2;</code>
     */
    const INDICATOR_INTERVAL_FIVE_MINUTES = 2;
    /**
     *15 минут.
     *
     * Generated from protobuf enum <code>INDICATOR_INTERVAL_FIFTEEN_MINUTES = 3;</code>
     */
    const INDICATOR_INTERVAL_FIFTEEN_MINUTES = 3;
    /**
     *1 час.
     *
     * Generated from protobuf enum <code>INDICATOR_INTERVAL_ONE_HOUR = 4;</code>
     */
    const INDICATOR_INTERVAL_ONE_HOUR = 4;
    /**
     *1 день.
     *
     * Generated from protobuf enum <code>INDICATOR_INTERVAL_ONE_DAY = 5;</code>
     */
    const INDICATOR_INTERVAL_ONE_DAY = 5;
    /**
     *2 минуты.
     *
     * Generated from protobuf enum <code>INDICATOR_INTERVAL_2_MIN = 6;</code>
     */
    const INDICATOR_INTERVAL_2_MIN = 6;
    /**
     *3 минуты.
     *
     * Generated from protobuf enum <code>INDICATOR_INTERVAL_3_MIN = 7;</code>
     */
    const INDICATOR_INTERVAL_3_MIN = 7;
    /**
     *10 минут.
     *
     * Generated from protobuf enum <code>INDICATOR_INTERVAL_10_MIN = 8;</code>
     */
    const INDICATOR_INTERVAL_10_MIN = 8;
    /**
     *30 минут.
     *
     * Generated from protobuf enum <code>INDICATOR_INTERVAL_30_MIN = 9;</code>
     */
    const INDICATOR_INTERVAL_30_MIN = 9;
    /**
     *2 часа.
     *
     * Generated from protobuf enum <code>INDICATOR_INTERVAL_2_HOUR = 10;</code>
     */
    const INDICATOR_INTERVAL_2_HOUR = 10;
    /**
     *4 часа.
     *
     * Generated from protobuf enum <code>INDICATOR_INTERVAL_4_HOUR = 11;</code>
     */
    const INDICATOR_INTERVAL_4_HOUR = 11;
    /**
     *Неделя.
     *
     * Generated from protobuf enum <code>INDICATOR_INTERVAL_WEEK = 12;</code>
     */
    const INDICATOR_INTERVAL_WEEK = 12;
    /**
     *Месяц.
     *
     * Generated from protobuf enum <code>INDICATOR_INTERVAL_MONTH = 13;</code>
     */
    const INDICATOR_INTERVAL_MONTH = 13;

    private static $valueToName = [
        self::INDICATOR_INTERVAL_UNSPECIFIED => 'INDICATOR_INTERVAL_UNSPECIFIED',
        self::INDICATOR_INTERVAL_ONE_MINUTE => 'INDICATOR_INTERVAL_ONE_MINUTE',
        self::INDICATOR_INTERVAL_FIVE_MINUTES => 'INDICATOR_INTERVAL_FIVE_MINUTES',
        self::INDICATOR_INTERVAL_FIFTEEN_MINUTES => 'INDICATOR_INTERVAL_FIFTEEN_MINUTES',
        self::INDICATOR_INTERVAL_ONE_HOUR => 'INDICATOR_INTERVAL_ONE_HOUR',
        self::INDICATOR_INTERVAL_ONE_DAY => 'INDICATOR_INTERVAL_ONE_DAY',
        self::INDICATOR_INTERVAL_2_MIN => 'INDICATOR_INTERVAL_2_MIN',
        self::INDICATOR_INTERVAL_3_MIN => 'INDICATOR_INTERVAL_3_MIN',
        self::INDICATOR_INTERVAL_10_MIN => 'INDICATOR_INTERVAL_10_MIN',
        self::INDICATOR_INTERVAL_30_MIN => 'INDICATOR_INTERVAL_30_MIN',
        self::INDICATOR_INTERVAL_2_HOUR => 'INDICATOR_INTERVAL_2_HOUR',
        self::INDICATOR_INTERVAL_4_HOUR => 'INDICATOR_INTERVAL_4_HOUR',
        self::INDICATOR_INTERVAL_WEEK => 'INDICATOR_INTERVAL_WEEK',
        self::INDICATOR_INTERVAL_MONTH => 'INDICATOR_INTERVAL_MONTH',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(IndicatorInterval::class, \Tinkoff\Invest\V1\GetTechAnalysisRequest_IndicatorInterval::class);
