<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: signals.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Стратегии
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.GetStrategiesResponse</code>
 */
class GetStrategiesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.Strategy strategies = 1;</code>
     */
    private $strategies;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Tinkoff\Invest\V1\Strategy[]|\Google\Protobuf\Internal\RepeatedField $strategies
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Signals::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.Strategy strategies = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStrategies()
    {
        return $this->strategies;
    }

    /**
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.Strategy strategies = 1;</code>
     * @param \Tinkoff\Invest\V1\Strategy[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStrategies($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tinkoff\Invest\V1\Strategy::class);
        $this->strategies = $arr;

        return $this;
    }

}
