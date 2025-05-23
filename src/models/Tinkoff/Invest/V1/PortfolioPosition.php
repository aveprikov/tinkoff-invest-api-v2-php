<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: operations.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Позиции портфеля.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.PortfolioPosition</code>
 */
class PortfolioPosition extends \Google\Protobuf\Internal\Message
{
    /**
     *FIGI-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string figi = 1;</code>
     */
    protected $figi = '';
    /**
     *Тип инструмента.
     *
     * Generated from protobuf field <code>string instrument_type = 2;</code>
     */
    protected $instrument_type = '';
    /**
     *Количество инструмента в портфеле в штуках.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation quantity = 3;</code>
     */
    protected $quantity = null;
    /**
     *Средневзвешенная цена позиции. Для пересчета возможна задержка до одной секунды.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue average_position_price = 4;</code>
     */
    protected $average_position_price = null;
    /**
     *Текущая рассчитанная доходность позиции.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation expected_yield = 5;</code>
     */
    protected $expected_yield = null;
    /**
     * Текущий НКД.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue current_nkd = 6;</code>
     */
    protected $current_nkd = null;
    /**
     * Deprecated Средняя цена позиции в пунктах (для фьючерсов). Для пересчета возможна задержка до одной секунды.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation average_position_price_pt = 7 [deprecated = true];</code>
     * @deprecated
     */
    protected $average_position_price_pt = null;
    /**
     *Текущая цена за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue current_price = 8;</code>
     */
    protected $current_price = null;
    /**
     *Средняя цена позиции по методу FIFO. Для пересчета возможна задержка до одной секунды.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue average_position_price_fifo = 9;</code>
     */
    protected $average_position_price_fifo = null;
    /**
     *Deprecated Количество лотов в портфеле.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation quantity_lots = 10 [deprecated = true];</code>
     * @deprecated
     */
    protected $quantity_lots = null;
    /**
     *Заблокировано на бирже.
     *
     * Generated from protobuf field <code>bool blocked = 21;</code>
     */
    protected $blocked = false;
    /**
     *Количество бумаг, заблокированных выставленными заявками.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation blocked_lots = 22;</code>
     */
    protected $blocked_lots = null;
    /**
     *Уникальный идентификатор позиции.
     *
     * Generated from protobuf field <code>string position_uid = 24;</code>
     */
    protected $position_uid = '';
    /**
     *Уникальный идентификатор инструмента.
     *
     * Generated from protobuf field <code>string instrument_uid = 25;</code>
     */
    protected $instrument_uid = '';
    /**
     *Вариационная маржа.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue var_margin = 26;</code>
     */
    protected $var_margin = null;
    /**
     *Текущая рассчитанная доходность позиции.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation expected_yield_fifo = 27;</code>
     */
    protected $expected_yield_fifo = null;
    /**
     * Рассчитанная доходность портфеля за день.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue daily_yield = 31;</code>
     */
    protected $daily_yield = null;
    /**
     *Тикер инструмента.
     *
     * Generated from protobuf field <code>string ticker = 32;</code>
     */
    protected $ticker = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $figi
     *          FIGI-идентификатор инструмента.
     *     @type string $instrument_type
     *          Тип инструмента.
     *     @type \Tinkoff\Invest\V1\Quotation $quantity
     *          Количество инструмента в портфеле в штуках.
     *     @type \Tinkoff\Invest\V1\MoneyValue $average_position_price
     *          Средневзвешенная цена позиции. Для пересчета возможна задержка до одной секунды.
     *     @type \Tinkoff\Invest\V1\Quotation $expected_yield
     *          Текущая рассчитанная доходность позиции.
     *     @type \Tinkoff\Invest\V1\MoneyValue $current_nkd
     *           Текущий НКД.
     *     @type \Tinkoff\Invest\V1\Quotation $average_position_price_pt
     *           Deprecated Средняя цена позиции в пунктах (для фьючерсов). Для пересчета возможна задержка до одной секунды.
     *     @type \Tinkoff\Invest\V1\MoneyValue $current_price
     *          Текущая цена за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента.
     *     @type \Tinkoff\Invest\V1\MoneyValue $average_position_price_fifo
     *          Средняя цена позиции по методу FIFO. Для пересчета возможна задержка до одной секунды.
     *     @type \Tinkoff\Invest\V1\Quotation $quantity_lots
     *          Deprecated Количество лотов в портфеле.
     *     @type bool $blocked
     *          Заблокировано на бирже.
     *     @type \Tinkoff\Invest\V1\Quotation $blocked_lots
     *          Количество бумаг, заблокированных выставленными заявками.
     *     @type string $position_uid
     *          Уникальный идентификатор позиции.
     *     @type string $instrument_uid
     *          Уникальный идентификатор инструмента.
     *     @type \Tinkoff\Invest\V1\MoneyValue $var_margin
     *          Вариационная маржа.
     *     @type \Tinkoff\Invest\V1\Quotation $expected_yield_fifo
     *          Текущая рассчитанная доходность позиции.
     *     @type \Tinkoff\Invest\V1\MoneyValue $daily_yield
     *           Рассчитанная доходность портфеля за день.
     *     @type string $ticker
     *          Тикер инструмента.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Operations::initOnce();
        parent::__construct($data);
    }

    /**
     *FIGI-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string figi = 1;</code>
     * @return string
     */
    public function getFigi()
    {
        return $this->figi;
    }

    /**
     *FIGI-идентификатор инструмента.
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
     *Тип инструмента.
     *
     * Generated from protobuf field <code>string instrument_type = 2;</code>
     * @return string
     */
    public function getInstrumentType()
    {
        return $this->instrument_type;
    }

    /**
     *Тип инструмента.
     *
     * Generated from protobuf field <code>string instrument_type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setInstrumentType($var)
    {
        GPBUtil::checkString($var, True);
        $this->instrument_type = $var;

        return $this;
    }

    /**
     *Количество инструмента в портфеле в штуках.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation quantity = 3;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getQuantity()
    {
        return isset($this->quantity) ? $this->quantity : null;
    }

    public function hasQuantity()
    {
        return isset($this->quantity);
    }

    public function clearQuantity()
    {
        unset($this->quantity);
    }

    /**
     *Количество инструмента в портфеле в штуках.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation quantity = 3;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setQuantity($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->quantity = $var;

        return $this;
    }

    /**
     *Средневзвешенная цена позиции. Для пересчета возможна задержка до одной секунды.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue average_position_price = 4;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue|null
     */
    public function getAveragePositionPrice()
    {
        return isset($this->average_position_price) ? $this->average_position_price : null;
    }

    public function hasAveragePositionPrice()
    {
        return isset($this->average_position_price);
    }

    public function clearAveragePositionPrice()
    {
        unset($this->average_position_price);
    }

    /**
     *Средневзвешенная цена позиции. Для пересчета возможна задержка до одной секунды.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue average_position_price = 4;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setAveragePositionPrice($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->average_position_price = $var;

        return $this;
    }

    /**
     *Текущая рассчитанная доходность позиции.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation expected_yield = 5;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getExpectedYield()
    {
        return isset($this->expected_yield) ? $this->expected_yield : null;
    }

    public function hasExpectedYield()
    {
        return isset($this->expected_yield);
    }

    public function clearExpectedYield()
    {
        unset($this->expected_yield);
    }

    /**
     *Текущая рассчитанная доходность позиции.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation expected_yield = 5;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setExpectedYield($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->expected_yield = $var;

        return $this;
    }

    /**
     * Текущий НКД.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue current_nkd = 6;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue|null
     */
    public function getCurrentNkd()
    {
        return isset($this->current_nkd) ? $this->current_nkd : null;
    }

    public function hasCurrentNkd()
    {
        return isset($this->current_nkd);
    }

    public function clearCurrentNkd()
    {
        unset($this->current_nkd);
    }

    /**
     * Текущий НКД.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue current_nkd = 6;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setCurrentNkd($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->current_nkd = $var;

        return $this;
    }

    /**
     * Deprecated Средняя цена позиции в пунктах (для фьючерсов). Для пересчета возможна задержка до одной секунды.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation average_position_price_pt = 7 [deprecated = true];</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     * @deprecated
     */
    public function getAveragePositionPricePt()
    {
        @trigger_error('average_position_price_pt is deprecated.', E_USER_DEPRECATED);
        return isset($this->average_position_price_pt) ? $this->average_position_price_pt : null;
    }

    public function hasAveragePositionPricePt()
    {
        @trigger_error('average_position_price_pt is deprecated.', E_USER_DEPRECATED);
        return isset($this->average_position_price_pt);
    }

    public function clearAveragePositionPricePt()
    {
        @trigger_error('average_position_price_pt is deprecated.', E_USER_DEPRECATED);
        unset($this->average_position_price_pt);
    }

    /**
     * Deprecated Средняя цена позиции в пунктах (для фьючерсов). Для пересчета возможна задержка до одной секунды.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation average_position_price_pt = 7 [deprecated = true];</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     * @deprecated
     */
    public function setAveragePositionPricePt($var)
    {
        @trigger_error('average_position_price_pt is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->average_position_price_pt = $var;

        return $this;
    }

    /**
     *Текущая цена за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue current_price = 8;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue|null
     */
    public function getCurrentPrice()
    {
        return isset($this->current_price) ? $this->current_price : null;
    }

    public function hasCurrentPrice()
    {
        return isset($this->current_price);
    }

    public function clearCurrentPrice()
    {
        unset($this->current_price);
    }

    /**
     *Текущая цена за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue current_price = 8;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setCurrentPrice($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->current_price = $var;

        return $this;
    }

    /**
     *Средняя цена позиции по методу FIFO. Для пересчета возможна задержка до одной секунды.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue average_position_price_fifo = 9;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue|null
     */
    public function getAveragePositionPriceFifo()
    {
        return isset($this->average_position_price_fifo) ? $this->average_position_price_fifo : null;
    }

    public function hasAveragePositionPriceFifo()
    {
        return isset($this->average_position_price_fifo);
    }

    public function clearAveragePositionPriceFifo()
    {
        unset($this->average_position_price_fifo);
    }

    /**
     *Средняя цена позиции по методу FIFO. Для пересчета возможна задержка до одной секунды.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue average_position_price_fifo = 9;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setAveragePositionPriceFifo($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->average_position_price_fifo = $var;

        return $this;
    }

    /**
     *Deprecated Количество лотов в портфеле.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation quantity_lots = 10 [deprecated = true];</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     * @deprecated
     */
    public function getQuantityLots()
    {
        @trigger_error('quantity_lots is deprecated.', E_USER_DEPRECATED);
        return isset($this->quantity_lots) ? $this->quantity_lots : null;
    }

    public function hasQuantityLots()
    {
        @trigger_error('quantity_lots is deprecated.', E_USER_DEPRECATED);
        return isset($this->quantity_lots);
    }

    public function clearQuantityLots()
    {
        @trigger_error('quantity_lots is deprecated.', E_USER_DEPRECATED);
        unset($this->quantity_lots);
    }

    /**
     *Deprecated Количество лотов в портфеле.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation quantity_lots = 10 [deprecated = true];</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     * @deprecated
     */
    public function setQuantityLots($var)
    {
        @trigger_error('quantity_lots is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->quantity_lots = $var;

        return $this;
    }

    /**
     *Заблокировано на бирже.
     *
     * Generated from protobuf field <code>bool blocked = 21;</code>
     * @return bool
     */
    public function getBlocked()
    {
        return $this->blocked;
    }

    /**
     *Заблокировано на бирже.
     *
     * Generated from protobuf field <code>bool blocked = 21;</code>
     * @param bool $var
     * @return $this
     */
    public function setBlocked($var)
    {
        GPBUtil::checkBool($var);
        $this->blocked = $var;

        return $this;
    }

    /**
     *Количество бумаг, заблокированных выставленными заявками.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation blocked_lots = 22;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getBlockedLots()
    {
        return isset($this->blocked_lots) ? $this->blocked_lots : null;
    }

    public function hasBlockedLots()
    {
        return isset($this->blocked_lots);
    }

    public function clearBlockedLots()
    {
        unset($this->blocked_lots);
    }

    /**
     *Количество бумаг, заблокированных выставленными заявками.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation blocked_lots = 22;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setBlockedLots($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->blocked_lots = $var;

        return $this;
    }

    /**
     *Уникальный идентификатор позиции.
     *
     * Generated from protobuf field <code>string position_uid = 24;</code>
     * @return string
     */
    public function getPositionUid()
    {
        return $this->position_uid;
    }

    /**
     *Уникальный идентификатор позиции.
     *
     * Generated from protobuf field <code>string position_uid = 24;</code>
     * @param string $var
     * @return $this
     */
    public function setPositionUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->position_uid = $var;

        return $this;
    }

    /**
     *Уникальный идентификатор инструмента.
     *
     * Generated from protobuf field <code>string instrument_uid = 25;</code>
     * @return string
     */
    public function getInstrumentUid()
    {
        return $this->instrument_uid;
    }

    /**
     *Уникальный идентификатор инструмента.
     *
     * Generated from protobuf field <code>string instrument_uid = 25;</code>
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
     *Вариационная маржа.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue var_margin = 26;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue|null
     */
    public function getVarMargin()
    {
        return isset($this->var_margin) ? $this->var_margin : null;
    }

    public function hasVarMargin()
    {
        return isset($this->var_margin);
    }

    public function clearVarMargin()
    {
        unset($this->var_margin);
    }

    /**
     *Вариационная маржа.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue var_margin = 26;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setVarMargin($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->var_margin = $var;

        return $this;
    }

    /**
     *Текущая рассчитанная доходность позиции.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation expected_yield_fifo = 27;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getExpectedYieldFifo()
    {
        return isset($this->expected_yield_fifo) ? $this->expected_yield_fifo : null;
    }

    public function hasExpectedYieldFifo()
    {
        return isset($this->expected_yield_fifo);
    }

    public function clearExpectedYieldFifo()
    {
        unset($this->expected_yield_fifo);
    }

    /**
     *Текущая рассчитанная доходность позиции.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation expected_yield_fifo = 27;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setExpectedYieldFifo($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->expected_yield_fifo = $var;

        return $this;
    }

    /**
     * Рассчитанная доходность портфеля за день.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue daily_yield = 31;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue|null
     */
    public function getDailyYield()
    {
        return isset($this->daily_yield) ? $this->daily_yield : null;
    }

    public function hasDailyYield()
    {
        return isset($this->daily_yield);
    }

    public function clearDailyYield()
    {
        unset($this->daily_yield);
    }

    /**
     * Рассчитанная доходность портфеля за день.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue daily_yield = 31;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setDailyYield($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->daily_yield = $var;

        return $this;
    }

    /**
     *Тикер инструмента.
     *
     * Generated from protobuf field <code>string ticker = 32;</code>
     * @return string
     */
    public function getTicker()
    {
        return $this->ticker;
    }

    /**
     *Тикер инструмента.
     *
     * Generated from protobuf field <code>string ticker = 32;</code>
     * @param string $var
     * @return $this
     */
    public function setTicker($var)
    {
        GPBUtil::checkString($var, True);
        $this->ticker = $var;

        return $this;
    }

}

