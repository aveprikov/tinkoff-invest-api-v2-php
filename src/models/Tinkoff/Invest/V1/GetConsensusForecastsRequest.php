<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Запрос консенсус-прогнозов
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.GetConsensusForecastsRequest</code>
 */
class GetConsensusForecastsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *Настройки пагинации.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Page paging = 1;</code>
     */
    protected $paging = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Tinkoff\Invest\V1\Page $paging
     *          Настройки пагинации.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Instruments::initOnce();
        parent::__construct($data);
    }

    /**
     *Настройки пагинации.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Page paging = 1;</code>
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
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Page paging = 1;</code>
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
