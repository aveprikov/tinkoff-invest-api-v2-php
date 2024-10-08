<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: marketdata.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Запрос цен закрытия торговой сессии по инструменту.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.InstrumentClosePriceRequest</code>
 */
class InstrumentClosePriceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *Идентификатор инструмента. Принимает значение `figi` или `instrument_uid`.
     *
     * Generated from protobuf field <code>string instrument_id = 1;</code>
     */
    protected $instrument_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $instrument_id
     *          Идентификатор инструмента. Принимает значение `figi` или `instrument_uid`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Marketdata::initOnce();
        parent::__construct($data);
    }

    /**
     *Идентификатор инструмента. Принимает значение `figi` или `instrument_uid`.
     *
     * Generated from protobuf field <code>string instrument_id = 1;</code>
     * @return string
     */
    public function getInstrumentId()
    {
        return $this->instrument_id;
    }

    /**
     *Идентификатор инструмента. Принимает значение `figi` или `instrument_uid`.
     *
     * Generated from protobuf field <code>string instrument_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setInstrumentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->instrument_id = $var;

        return $this;
    }

}

