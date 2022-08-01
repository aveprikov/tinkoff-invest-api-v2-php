<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Клиринговый сертификат участия.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.AssetClearingCertificate</code>
 */
class AssetClearingCertificate extends \Google\Protobuf\Internal\Message
{
    /**
     *Номинал.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation nominal = 1;</code>
     */
    protected $nominal = null;
    /**
     *Валюта номинала.
     *
     * Generated from protobuf field <code>string nominal_currency = 2;</code>
     */
    protected $nominal_currency = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Tinkoff\Invest\V1\Quotation $nominal
     *          Номинал.
     *     @type string $nominal_currency
     *          Валюта номинала.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Instruments::initOnce();
        parent::__construct($data);
    }

    /**
     *Номинал.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation nominal = 1;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getNominal()
    {
        return isset($this->nominal) ? $this->nominal : null;
    }

    public function hasNominal()
    {
        return isset($this->nominal);
    }

    public function clearNominal()
    {
        unset($this->nominal);
    }

    /**
     *Номинал.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation nominal = 1;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setNominal($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->nominal = $var;

        return $this;
    }

    /**
     *Валюта номинала.
     *
     * Generated from protobuf field <code>string nominal_currency = 2;</code>
     * @return string
     */
    public function getNominalCurrency()
    {
        return $this->nominal_currency;
    }

    /**
     *Валюта номинала.
     *
     * Generated from protobuf field <code>string nominal_currency = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNominalCurrency($var)
    {
        GPBUtil::checkString($var, True);
        $this->nominal_currency = $var;

        return $this;
    }

}
