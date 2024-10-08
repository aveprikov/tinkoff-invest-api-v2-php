<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Котировка — денежная сумма без указания валюты.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.Quotation</code>
 */
class Quotation extends \Google\Protobuf\Internal\Message
{
    /**
     * Целая часть суммы, может быть отрицательным числом.
     *
     * Generated from protobuf field <code>int64 units = 1;</code>
     */
    protected $units = 0;
    /**
     * Дробная часть суммы, может быть отрицательным числом.
     *
     * Generated from protobuf field <code>int32 nano = 2;</code>
     */
    protected $nano = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $units
     *           Целая часть суммы, может быть отрицательным числом.
     *     @type int $nano
     *           Дробная часть суммы, может быть отрицательным числом.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Целая часть суммы, может быть отрицательным числом.
     *
     * Generated from protobuf field <code>int64 units = 1;</code>
     * @return int|string
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * Целая часть суммы, может быть отрицательным числом.
     *
     * Generated from protobuf field <code>int64 units = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUnits($var)
    {
        GPBUtil::checkInt64($var);
        $this->units = $var;

        return $this;
    }

    /**
     * Дробная часть суммы, может быть отрицательным числом.
     *
     * Generated from protobuf field <code>int32 nano = 2;</code>
     * @return int
     */
    public function getNano()
    {
        return $this->nano;
    }

    /**
     * Дробная часть суммы, может быть отрицательным числом.
     *
     * Generated from protobuf field <code>int32 nano = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setNano($var)
    {
        GPBUtil::checkInt32($var);
        $this->nano = $var;

        return $this;
    }

}

