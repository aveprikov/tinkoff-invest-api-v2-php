<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: marketdata.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.MarketValueInstrument</code>
 */
class MarketValueInstrument extends \Google\Protobuf\Internal\Message
{
    /**
     *Идентификатор инструмента.
     *
     * Generated from protobuf field <code>string instrument_uid = 1;</code>
     */
    protected $instrument_uid = '';
    /**
     *Массив параметров инструмента.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.MarketValue values = 2;</code>
     */
    private $values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $instrument_uid
     *          Идентификатор инструмента.
     *     @type \Tinkoff\Invest\V1\MarketValue[]|\Google\Protobuf\Internal\RepeatedField $values
     *          Массив параметров инструмента.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Marketdata::initOnce();
        parent::__construct($data);
    }

    /**
     *Идентификатор инструмента.
     *
     * Generated from protobuf field <code>string instrument_uid = 1;</code>
     * @return string
     */
    public function getInstrumentUid()
    {
        return $this->instrument_uid;
    }

    /**
     *Идентификатор инструмента.
     *
     * Generated from protobuf field <code>string instrument_uid = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setInstrumentUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->instrument_uid = $var;

        return $this;
    }

    /**
     *Массив параметров инструмента.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.MarketValue values = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     *Массив параметров инструмента.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.MarketValue values = 2;</code>
     * @param \Tinkoff\Invest\V1\MarketValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tinkoff\Invest\V1\MarketValue::class);
        $this->values = $arr;

        return $this;
    }

}

