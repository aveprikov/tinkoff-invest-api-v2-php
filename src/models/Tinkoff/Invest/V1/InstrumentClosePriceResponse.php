<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: marketdata.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Цена закрытия торговой сессии по инструменту.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.InstrumentClosePriceResponse</code>
 */
class InstrumentClosePriceResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *FIGI инструмента.
     *
     * Generated from protobuf field <code>string figi = 1;</code>
     */
    protected $figi = '';
    /**
     *UID инструмента.
     *
     * Generated from protobuf field <code>string instrument_uid = 2;</code>
     */
    protected $instrument_uid = '';
    /**
     *Цена закрытия торговой сессии.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation price = 11;</code>
     */
    protected $price = null;
    /**
     *Цена последней сделки с вечерней сессии. Цена публикуется биржей по торговым дням и в нерабочие дни не обновляется.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation evening_session_price = 12;</code>
     */
    protected $evening_session_price = null;
    /**
     *Дата совершения торгов.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 21;</code>
     */
    protected $time = null;
    /**
     *Дата цены закрытия вечерней сессии.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp evening_session_price_time = 23;</code>
     */
    protected $evening_session_price_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $figi
     *          FIGI инструмента.
     *     @type string $instrument_uid
     *          UID инструмента.
     *     @type \Tinkoff\Invest\V1\Quotation $price
     *          Цена закрытия торговой сессии.
     *     @type \Tinkoff\Invest\V1\Quotation $evening_session_price
     *          Цена последней сделки с вечерней сессии. Цена публикуется биржей по торговым дням и в нерабочие дни не обновляется.
     *     @type \Google\Protobuf\Timestamp $time
     *          Дата совершения торгов.
     *     @type \Google\Protobuf\Timestamp $evening_session_price_time
     *          Дата цены закрытия вечерней сессии.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Marketdata::initOnce();
        parent::__construct($data);
    }

    /**
     *FIGI инструмента.
     *
     * Generated from protobuf field <code>string figi = 1;</code>
     * @return string
     */
    public function getFigi()
    {
        return $this->figi;
    }

    /**
     *FIGI инструмента.
     *
     * Generated from protobuf field <code>string figi = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFigi($var)
    {
        GPBUtil::checkString($var, True);
        $this->figi = $var;

        return $this;
    }

    /**
     *UID инструмента.
     *
     * Generated from protobuf field <code>string instrument_uid = 2;</code>
     * @return string
     */
    public function getInstrumentUid()
    {
        return $this->instrument_uid;
    }

    /**
     *UID инструмента.
     *
     * Generated from protobuf field <code>string instrument_uid = 2;</code>
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
     *Цена закрытия торговой сессии.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation price = 11;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getPrice()
    {
        return isset($this->price) ? $this->price : null;
    }

    public function hasPrice()
    {
        return isset($this->price);
    }

    public function clearPrice()
    {
        unset($this->price);
    }

    /**
     *Цена закрытия торговой сессии.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation price = 11;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setPrice($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->price = $var;

        return $this;
    }

    /**
     *Цена последней сделки с вечерней сессии. Цена публикуется биржей по торговым дням и в нерабочие дни не обновляется.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation evening_session_price = 12;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getEveningSessionPrice()
    {
        return isset($this->evening_session_price) ? $this->evening_session_price : null;
    }

    public function hasEveningSessionPrice()
    {
        return isset($this->evening_session_price);
    }

    public function clearEveningSessionPrice()
    {
        unset($this->evening_session_price);
    }

    /**
     *Цена последней сделки с вечерней сессии. Цена публикуется биржей по торговым дням и в нерабочие дни не обновляется.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation evening_session_price = 12;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setEveningSessionPrice($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->evening_session_price = $var;

        return $this;
    }

    /**
     *Дата совершения торгов.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 21;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getTime()
    {
        return isset($this->time) ? $this->time : null;
    }

    public function hasTime()
    {
        return isset($this->time);
    }

    public function clearTime()
    {
        unset($this->time);
    }

    /**
     *Дата совершения торгов.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 21;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->time = $var;

        return $this;
    }

    /**
     *Дата цены закрытия вечерней сессии.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp evening_session_price_time = 23;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEveningSessionPriceTime()
    {
        return isset($this->evening_session_price_time) ? $this->evening_session_price_time : null;
    }

    public function hasEveningSessionPriceTime()
    {
        return isset($this->evening_session_price_time);
    }

    public function clearEveningSessionPriceTime()
    {
        unset($this->evening_session_price_time);
    }

    /**
     *Дата цены закрытия вечерней сессии.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp evening_session_price_time = 23;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEveningSessionPriceTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->evening_session_price_time = $var;

        return $this;
    }

}

