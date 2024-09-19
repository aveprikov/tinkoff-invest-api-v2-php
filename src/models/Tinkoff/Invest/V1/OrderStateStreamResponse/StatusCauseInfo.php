<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: orders.proto

namespace Tinkoff\Invest\V1\OrderStateStreamResponse;

use UnexpectedValueException;

/**
 *Дополнительная информация по статусу заявки
 *
 * Protobuf type <code>tinkoff.public.invest.api.contract.v1.OrderStateStreamResponse.StatusCauseInfo</code>
 */
class StatusCauseInfo
{
    /**
     *Не определено
     *
     * Generated from protobuf enum <code>CAUSE_UNSPECIFIED = 0;</code>
     */
    const CAUSE_UNSPECIFIED = 0;
    /**
     *Отменено клиентом
     *
     * Generated from protobuf enum <code>CAUSE_CANCELLED_BY_CLIENT = 15;</code>
     */
    const CAUSE_CANCELLED_BY_CLIENT = 15;
    /**
     *Отменено биржей
     *
     * Generated from protobuf enum <code>CAUSE_CANCELLED_BY_EXCHANGE = 1;</code>
     */
    const CAUSE_CANCELLED_BY_EXCHANGE = 1;
    /**
     *Заявка не выставлена из-за нехватки средств
     *
     * Generated from protobuf enum <code>CAUSE_CANCELLED_NOT_ENOUGH_POSITION = 2;</code>
     */
    const CAUSE_CANCELLED_NOT_ENOUGH_POSITION = 2;
    /**
     *Отменено из-за блокировки клиента
     *
     * Generated from protobuf enum <code>CAUSE_CANCELLED_BY_CLIENT_BLOCK = 3;</code>
     */
    const CAUSE_CANCELLED_BY_CLIENT_BLOCK = 3;
    /**
     *Отклонено брокером
     *
     * Generated from protobuf enum <code>CAUSE_REJECTED_BY_BROKER = 4;</code>
     */
    const CAUSE_REJECTED_BY_BROKER = 4;
    /**
     *Отклонено биржей
     *
     * Generated from protobuf enum <code>CAUSE_REJECTED_BY_EXCHANGE = 5;</code>
     */
    const CAUSE_REJECTED_BY_EXCHANGE = 5;
    /**
     *Отменено брокером
     *
     * Generated from protobuf enum <code>CAUSE_CANCELLED_BY_BROKER = 6;</code>
     */
    const CAUSE_CANCELLED_BY_BROKER = 6;

    private static $valueToName = [
        self::CAUSE_UNSPECIFIED => 'CAUSE_UNSPECIFIED',
        self::CAUSE_CANCELLED_BY_CLIENT => 'CAUSE_CANCELLED_BY_CLIENT',
        self::CAUSE_CANCELLED_BY_EXCHANGE => 'CAUSE_CANCELLED_BY_EXCHANGE',
        self::CAUSE_CANCELLED_NOT_ENOUGH_POSITION => 'CAUSE_CANCELLED_NOT_ENOUGH_POSITION',
        self::CAUSE_CANCELLED_BY_CLIENT_BLOCK => 'CAUSE_CANCELLED_BY_CLIENT_BLOCK',
        self::CAUSE_REJECTED_BY_BROKER => 'CAUSE_REJECTED_BY_BROKER',
        self::CAUSE_REJECTED_BY_EXCHANGE => 'CAUSE_REJECTED_BY_EXCHANGE',
        self::CAUSE_CANCELLED_BY_BROKER => 'CAUSE_CANCELLED_BY_BROKER',
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
class_alias(StatusCauseInfo::class, \Tinkoff\Invest\V1\OrderStateStreamResponse_StatusCauseInfo::class);
