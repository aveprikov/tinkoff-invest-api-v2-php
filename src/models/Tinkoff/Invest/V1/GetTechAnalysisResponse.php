<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: marketdata.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.GetTechAnalysisResponse</code>
 */
class GetTechAnalysisResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *Массив значений результатов технического анализа.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.GetTechAnalysisResponse.TechAnalysisItem technical_indicators = 1;</code>
     */
    private $technical_indicators;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Tinkoff\Invest\V1\GetTechAnalysisResponse\TechAnalysisItem[]|\Google\Protobuf\Internal\RepeatedField $technical_indicators
     *          Массив значений результатов технического анализа.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Marketdata::initOnce();
        parent::__construct($data);
    }

    /**
     *Массив значений результатов технического анализа.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.GetTechAnalysisResponse.TechAnalysisItem technical_indicators = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTechnicalIndicators()
    {
        return $this->technical_indicators;
    }

    /**
     *Массив значений результатов технического анализа.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.GetTechAnalysisResponse.TechAnalysisItem technical_indicators = 1;</code>
     * @param \Tinkoff\Invest\V1\GetTechAnalysisResponse\TechAnalysisItem[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTechnicalIndicators($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tinkoff\Invest\V1\GetTechAnalysisResponse\TechAnalysisItem::class);
        $this->technical_indicators = $arr;

        return $this;
    }

}

