<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: signals.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Запрос сигналов.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.GetSignalsRequest</code>
 */
class GetSignalsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *Идентификатор сигнала.
     *
     * Generated from protobuf field <code>string signal_id = 1;</code>
     */
    protected $signal_id = null;
    /**
     *Идентификатор стратегии.
     *
     * Generated from protobuf field <code>string strategy_id = 2;</code>
     */
    protected $strategy_id = null;
    /**
     *Тип стратегии.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.StrategyType strategy_type = 3;</code>
     */
    protected $strategy_type = null;
    /**
     *	Идентификатор бумаги
     *
     * Generated from protobuf field <code>string instrument_uid = 4;</code>
     */
    protected $instrument_uid = null;
    /**
     *	Дата начала запрашиваемого интервала в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp from = 5;</code>
     */
    protected $from = null;
    /**
     *	Дата конца запрашиваемого интервала  в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp to = 6;</code>
     */
    protected $to = null;
    /**
     *	Направление сигнала.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SignalDirection direction = 7;</code>
     */
    protected $direction = null;
    /**
     *Состояние сигнала.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SignalState active = 8;</code>
     */
    protected $active = null;
    /**
     *Настройки пагинации.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Page paging = 9;</code>
     */
    protected $paging = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $signal_id
     *          Идентификатор сигнала.
     *     @type string $strategy_id
     *          Идентификатор стратегии.
     *     @type int $strategy_type
     *          Тип стратегии.
     *     @type string $instrument_uid
     *          	Идентификатор бумаги
     *     @type \Google\Protobuf\Timestamp $from
     *          	Дата начала запрашиваемого интервала в часовом поясе UTC.
     *     @type \Google\Protobuf\Timestamp $to
     *          	Дата конца запрашиваемого интервала  в часовом поясе UTC.
     *     @type int $direction
     *          	Направление сигнала.
     *     @type int $active
     *          Состояние сигнала.
     *     @type \Tinkoff\Invest\V1\Page $paging
     *          Настройки пагинации.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Signals::initOnce();
        parent::__construct($data);
    }

    /**
     *Идентификатор сигнала.
     *
     * Generated from protobuf field <code>string signal_id = 1;</code>
     * @return string
     */
    public function getSignalId()
    {
        return isset($this->signal_id) ? $this->signal_id : '';
    }

    public function hasSignalId()
    {
        return isset($this->signal_id);
    }

    public function clearSignalId()
    {
        unset($this->signal_id);
    }

    /**
     *Идентификатор сигнала.
     *
     * Generated from protobuf field <code>string signal_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSignalId($var)
    {
        GPBUtil::checkString($var, True);
        $this->signal_id = $var;

        return $this;
    }

    /**
     *Идентификатор стратегии.
     *
     * Generated from protobuf field <code>string strategy_id = 2;</code>
     * @return string
     */
    public function getStrategyId()
    {
        return isset($this->strategy_id) ? $this->strategy_id : '';
    }

    public function hasStrategyId()
    {
        return isset($this->strategy_id);
    }

    public function clearStrategyId()
    {
        unset($this->strategy_id);
    }

    /**
     *Идентификатор стратегии.
     *
     * Generated from protobuf field <code>string strategy_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setStrategyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->strategy_id = $var;

        return $this;
    }

    /**
     *Тип стратегии.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.StrategyType strategy_type = 3;</code>
     * @return int
     */
    public function getStrategyType()
    {
        return isset($this->strategy_type) ? $this->strategy_type : 0;
    }

    public function hasStrategyType()
    {
        return isset($this->strategy_type);
    }

    public function clearStrategyType()
    {
        unset($this->strategy_type);
    }

    /**
     *Тип стратегии.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.StrategyType strategy_type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setStrategyType($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\StrategyType::class);
        $this->strategy_type = $var;

        return $this;
    }

    /**
     *	Идентификатор бумаги
     *
     * Generated from protobuf field <code>string instrument_uid = 4;</code>
     * @return string
     */
    public function getInstrumentUid()
    {
        return isset($this->instrument_uid) ? $this->instrument_uid : '';
    }

    public function hasInstrumentUid()
    {
        return isset($this->instrument_uid);
    }

    public function clearInstrumentUid()
    {
        unset($this->instrument_uid);
    }

    /**
     *	Идентификатор бумаги
     *
     * Generated from protobuf field <code>string instrument_uid = 4;</code>
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
     *	Дата начала запрашиваемого интервала в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp from = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getFrom()
    {
        return isset($this->from) ? $this->from : null;
    }

    public function hasFrom()
    {
        return isset($this->from);
    }

    public function clearFrom()
    {
        unset($this->from);
    }

    /**
     *	Дата начала запрашиваемого интервала в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp from = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFrom($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->from = $var;

        return $this;
    }

    /**
     *	Дата конца запрашиваемого интервала  в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp to = 6;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getTo()
    {
        return isset($this->to) ? $this->to : null;
    }

    public function hasTo()
    {
        return isset($this->to);
    }

    public function clearTo()
    {
        unset($this->to);
    }

    /**
     *	Дата конца запрашиваемого интервала  в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp to = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTo($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->to = $var;

        return $this;
    }

    /**
     *	Направление сигнала.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SignalDirection direction = 7;</code>
     * @return int
     */
    public function getDirection()
    {
        return isset($this->direction) ? $this->direction : 0;
    }

    public function hasDirection()
    {
        return isset($this->direction);
    }

    public function clearDirection()
    {
        unset($this->direction);
    }

    /**
     *	Направление сигнала.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SignalDirection direction = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setDirection($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\SignalDirection::class);
        $this->direction = $var;

        return $this;
    }

    /**
     *Состояние сигнала.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SignalState active = 8;</code>
     * @return int
     */
    public function getActive()
    {
        return isset($this->active) ? $this->active : 0;
    }

    public function hasActive()
    {
        return isset($this->active);
    }

    public function clearActive()
    {
        unset($this->active);
    }

    /**
     *Состояние сигнала.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SignalState active = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setActive($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\SignalState::class);
        $this->active = $var;

        return $this;
    }

    /**
     *Настройки пагинации.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Page paging = 9;</code>
     * @return \Tinkoff\Invest\V1\Page|null
     */
    public function getPaging()
    {
        return isset($this->paging) ? $this->paging : null;
    }

    public function hasPaging()
    {
        return isset($this->paging);
    }

    public function clearPaging()
    {
        unset($this->paging);
    }

    /**
     *Настройки пагинации.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Page paging = 9;</code>
     * @param \Tinkoff\Invest\V1\Page $var
     * @return $this
     */
    public function setPaging($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Page::class);
        $this->paging = $var;

        return $this;
    }

}
