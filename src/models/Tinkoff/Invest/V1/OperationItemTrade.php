<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: operations.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Сделка по операции.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.OperationItemTrade</code>
 */
class OperationItemTrade extends \Google\Protobuf\Internal\Message
{
    /**
     *Номер сделки
     *
     * Generated from protobuf field <code>string num = 1;</code>
     */
    protected $num = '';
    /**
     *Дата сделки
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp date = 6;</code>
     */
    protected $date = null;
    /**
     *Количество в единицах.
     *
     * Generated from protobuf field <code>int64 quantity = 11;</code>
     */
    protected $quantity = 0;
    /**
     *Цена.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue price = 16;</code>
     */
    protected $price = null;
    /**
     *Доходность.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue yield = 21;</code>
     */
    protected $yield = null;
    /**
     *Относительная доходность.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation yield_relative = 22;</code>
     */
    protected $yield_relative = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $num
     *          Номер сделки
     *     @type \Google\Protobuf\Timestamp $date
     *          Дата сделки
     *     @type int|string $quantity
     *          Количество в единицах.
     *     @type \Tinkoff\Invest\V1\MoneyValue $price
     *          Цена.
     *     @type \Tinkoff\Invest\V1\MoneyValue $yield
     *          Доходность.
     *     @type \Tinkoff\Invest\V1\Quotation $yield_relative
     *          Относительная доходность.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Operations::initOnce();
        parent::__construct($data);
    }

    /**
     *Номер сделки
     *
     * Generated from protobuf field <code>string num = 1;</code>
     * @return string
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     *Номер сделки
     *
     * Generated from protobuf field <code>string num = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNum($var)
    {
        GPBUtil::checkString($var, True);
        $this->num = $var;

        return $this;
    }

    /**
     *Дата сделки
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp date = 6;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getDate()
    {
        return isset($this->date) ? $this->date : null;
    }

    public function hasDate()
    {
        return isset($this->date);
    }

    public function clearDate()
    {
        unset($this->date);
    }

    /**
     *Дата сделки
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp date = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->date = $var;

        return $this;
    }

    /**
     *Количество в единицах.
     *
     * Generated from protobuf field <code>int64 quantity = 11;</code>
     * @return int|string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     *Количество в единицах.
     *
     * Generated from protobuf field <code>int64 quantity = 11;</code>
     * @param int|string $var
     * @return $this
     */
    public function setQuantity($var)
    {
        GPBUtil::checkInt64($var);
        $this->quantity = $var;

        return $this;
    }

    /**
     *Цена.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue price = 16;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue|null
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
     *Цена.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue price = 16;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setPrice($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->price = $var;

        return $this;
    }

    /**
     *Доходность.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue yield = 21;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue|null
     */
    public function getYield()
    {
        return isset($this->yield) ? $this->yield : null;
    }

    public function hasYield()
    {
        return isset($this->yield);
    }

    public function clearYield()
    {
        unset($this->yield);
    }

    /**
     *Доходность.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue yield = 21;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setYield($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->yield = $var;

        return $this;
    }

    /**
     *Относительная доходность.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation yield_relative = 22;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getYieldRelative()
    {
        return isset($this->yield_relative) ? $this->yield_relative : null;
    }

    public function hasYieldRelative()
    {
        return isset($this->yield_relative);
    }

    public function clearYieldRelative()
    {
        unset($this->yield_relative);
    }

    /**
     *Относительная доходность.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation yield_relative = 22;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setYieldRelative($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->yield_relative = $var;

        return $this;
    }

}
