<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Запрос списка избранных инструментов, входные параметры не требуются.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.GetFavoritesRequest</code>
 */
class GetFavoritesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *Уникальный идентификатор группы.
     *
     * Generated from protobuf field <code>string group_id = 1;</code>
     */
    protected $group_id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $group_id
     *          Уникальный идентификатор группы.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Instruments::initOnce();
        parent::__construct($data);
    }

    /**
     *Уникальный идентификатор группы.
     *
     * Generated from protobuf field <code>string group_id = 1;</code>
     * @return string
     */
    public function getGroupId()
    {
        return isset($this->group_id) ? $this->group_id : '';
    }

    public function hasGroupId()
    {
        return isset($this->group_id);
    }

    public function clearGroupId()
    {
        unset($this->group_id);
    }

    /**
     *Уникальный идентификатор группы.
     *
     * Generated from protobuf field <code>string group_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setGroupId($var)
    {
        GPBUtil::checkString($var, True);
        $this->group_id = $var;

        return $this;
    }

}

