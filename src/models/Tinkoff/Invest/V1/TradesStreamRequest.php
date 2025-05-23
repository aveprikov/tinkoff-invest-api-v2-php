<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: orders.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Запрос установки соединения.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.TradesStreamRequest</code>
 */
class TradesStreamRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *Идентификаторы счетов.
     *
     * Generated from protobuf field <code>repeated string accounts = 1;</code>
     */
    private $accounts;
    /**
     *Задержка (пинг) сообщений: 5000–180 000 миллисекунд. Значение по умолчанию — 120 000.
     *
     * Generated from protobuf field <code>int32 ping_delay_ms = 15;</code>
     */
    protected $ping_delay_ms = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $accounts
     *          Идентификаторы счетов.
     *     @type int $ping_delay_ms
     *          Задержка (пинг) сообщений: 5000–180 000 миллисекунд. Значение по умолчанию — 120 000.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Orders::initOnce();
        parent::__construct($data);
    }

    /**
     *Идентификаторы счетов.
     *
     * Generated from protobuf field <code>repeated string accounts = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAccounts()
    {
        return $this->accounts;
    }

    /**
     *Идентификаторы счетов.
     *
     * Generated from protobuf field <code>repeated string accounts = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAccounts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->accounts = $arr;

        return $this;
    }

    /**
     *Задержка (пинг) сообщений: 5000–180 000 миллисекунд. Значение по умолчанию — 120 000.
     *
     * Generated from protobuf field <code>int32 ping_delay_ms = 15;</code>
     * @return int
     */
    public function getPingDelayMs()
    {
        return isset($this->ping_delay_ms) ? $this->ping_delay_ms : 0;
    }

    public function hasPingDelayMs()
    {
        return isset($this->ping_delay_ms);
    }

    public function clearPingDelayMs()
    {
        unset($this->ping_delay_ms);
    }

    /**
     *Задержка (пинг) сообщений: 5000–180 000 миллисекунд. Значение по умолчанию — 120 000.
     *
     * Generated from protobuf field <code>int32 ping_delay_ms = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setPingDelayMs($var)
    {
        GPBUtil::checkInt32($var);
        $this->ping_delay_ms = $var;

        return $this;
    }

}

