<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/grpc/src/admin.proto

namespace Admin\UnlockEventAwardsRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>admin.UnlockEventAwardsRequest.Operator</code>
 */
class Operator extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string code = 1;</code>
     */
    protected $code = '';
    /**
     * Generated from protobuf field <code>string timezone = 2;</code>
     */
    protected $timezone = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $code
     *     @type string $timezone
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Src\Grpc\Src\Admin::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string code = 1;</code>
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Generated from protobuf field <code>string code = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string timezone = 2;</code>
     * @return string
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * Generated from protobuf field <code>string timezone = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTimezone($var)
    {
        GPBUtil::checkString($var, True);
        $this->timezone = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Operator::class, \Admin\UnlockEventAwardsRequest_Operator::class);

