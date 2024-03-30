<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/grpc/src/game.proto

namespace Grpc\Build\Game;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>game.GetBetlogDetailRequest</code>
 */
class GetBetlogDetailRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string opCode = 1;</code>
     */
    protected $opCode = '';
    /**
     * Generated from protobuf field <code>string traceId = 2;</code>
     */
    protected $traceId = '';
    /**
     * Generated from protobuf field <code>string lang = 3;</code>
     */
    protected $lang = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $opCode
     *     @type string $traceId
     *     @type string $lang
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Src\Grpc\Src\Game::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string opCode = 1;</code>
     * @return string
     */
    public function getOpCode()
    {
        return $this->opCode;
    }

    /**
     * Generated from protobuf field <code>string opCode = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setOpCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->opCode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string traceId = 2;</code>
     * @return string
     */
    public function getTraceId()
    {
        return $this->traceId;
    }

    /**
     * Generated from protobuf field <code>string traceId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTraceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->traceId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string lang = 3;</code>
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Generated from protobuf field <code>string lang = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setLang($var)
    {
        GPBUtil::checkString($var, True);
        $this->lang = $var;

        return $this;
    }

}

