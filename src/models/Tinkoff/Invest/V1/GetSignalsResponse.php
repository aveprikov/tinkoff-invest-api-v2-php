<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: signals.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Сигналы.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.GetSignalsResponse</code>
 */
class GetSignalsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *Массив сигналов.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.Signal signals = 1;</code>
     */
    private $signals;
    /**
     *Данные по пагинации.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.PageResponse paging = 2;</code>
     */
    protected $paging = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Tinkoff\Invest\V1\Signal[]|\Google\Protobuf\Internal\RepeatedField $signals
     *          Массив сигналов.
     *     @type \Tinkoff\Invest\V1\PageResponse $paging
     *          Данные по пагинации.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Signals::initOnce();
        parent::__construct($data);
    }

    /**
     *Массив сигналов.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.Signal signals = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSignals()
    {
        return $this->signals;
    }

    /**
     *Массив сигналов.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.Signal signals = 1;</code>
     * @param \Tinkoff\Invest\V1\Signal[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSignals($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tinkoff\Invest\V1\Signal::class);
        $this->signals = $arr;

        return $this;
    }

    /**
     *Данные по пагинации.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.PageResponse paging = 2;</code>
     * @return \Tinkoff\Invest\V1\PageResponse|null
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
     *Данные по пагинации.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.PageResponse paging = 2;</code>
     * @param \Tinkoff\Invest\V1\PageResponse $var
     * @return $this
     */
    public function setPaging($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\PageResponse::class);
        $this->paging = $var;

        return $this;
    }

}
