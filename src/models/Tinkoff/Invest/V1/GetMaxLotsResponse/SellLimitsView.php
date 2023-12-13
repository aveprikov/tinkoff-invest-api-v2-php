<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: orders.proto

namespace Tinkoff\Invest\V1\GetMaxLotsResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.GetMaxLotsResponse.SellLimitsView</code>
 */
class SellLimitsView extends \Google\Protobuf\Internal\Message
{
    /**
     *Максимальное доступное количество лотов для продажи
     *
     * Generated from protobuf field <code>int64 sell_max_lots = 1;</code>
     */
    protected $sell_max_lots = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $sell_max_lots
     *          Максимальное доступное количество лотов для продажи
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Orders::initOnce();
        parent::__construct($data);
    }

    /**
     *Максимальное доступное количество лотов для продажи
     *
     * Generated from protobuf field <code>int64 sell_max_lots = 1;</code>
     * @return int|string
     */
    public function getSellMaxLots()
    {
        return $this->sell_max_lots;
    }

    /**
     *Максимальное доступное количество лотов для продажи
     *
     * Generated from protobuf field <code>int64 sell_max_lots = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSellMaxLots($var)
    {
        GPBUtil::checkInt64($var);
        $this->sell_max_lots = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SellLimitsView::class, \Tinkoff\Invest\V1\GetMaxLotsResponse_SellLimitsView::class);
