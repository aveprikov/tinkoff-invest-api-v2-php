<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Связь с другим инструментом.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.InstrumentLink</code>
 */
class InstrumentLink extends \Google\Protobuf\Internal\Message
{
    /**
     *Тип связи.
     *
     * Generated from protobuf field <code>string type = 1;</code>
     */
    protected $type = '';
    /**
     *uid идентификатор связанного инструмента.
     *
     * Generated from protobuf field <code>string instrument_uid = 2;</code>
     */
    protected $instrument_uid = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $type
     *          Тип связи.
     *     @type string $instrument_uid
     *          uid идентификатор связанного инструмента.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Instruments::initOnce();
        parent::__construct($data);
    }

    /**
     *Тип связи.
     *
     * Generated from protobuf field <code>string type = 1;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     *Тип связи.
     *
     * Generated from protobuf field <code>string type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     *uid идентификатор связанного инструмента.
     *
     * Generated from protobuf field <code>string instrument_uid = 2;</code>
     * @return string
     */
    public function getInstrumentUid()
    {
        return $this->instrument_uid;
    }

    /**
     *uid идентификатор связанного инструмента.
     *
     * Generated from protobuf field <code>string instrument_uid = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setInstrumentUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->instrument_uid = $var;

        return $this;
    }

}
