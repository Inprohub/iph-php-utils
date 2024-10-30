<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/grpc/src/admin.proto

namespace Admin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>admin.UnlockEventAwardsRequest</code>
 */
class UnlockEventAwardsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.admin.UnlockEventAwardsRequest.Operator operator = 1;</code>
     */
    protected $operator = null;
    /**
     * Generated from protobuf field <code>.admin.UnlockEventAwardsRequest.Member member = 2;</code>
     */
    protected $member = null;
    /**
     * Generated from protobuf field <code>string event_wallet_code = 3;</code>
     */
    protected $event_wallet_code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Admin\UnlockEventAwardsRequest\Operator $operator
     *     @type \Admin\UnlockEventAwardsRequest\Member $member
     *     @type string $event_wallet_code
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Src\Grpc\Src\Admin::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.admin.UnlockEventAwardsRequest.Operator operator = 1;</code>
     * @return \Admin\UnlockEventAwardsRequest\Operator|null
     */
    public function getOperator()
    {
        return $this->operator;
    }

    public function hasOperator()
    {
        return isset($this->operator);
    }

    public function clearOperator()
    {
        unset($this->operator);
    }

    /**
     * Generated from protobuf field <code>.admin.UnlockEventAwardsRequest.Operator operator = 1;</code>
     * @param \Admin\UnlockEventAwardsRequest\Operator $var
     * @return $this
     */
    public function setOperator($var)
    {
        GPBUtil::checkMessage($var, \Admin\UnlockEventAwardsRequest\Operator::class);
        $this->operator = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.admin.UnlockEventAwardsRequest.Member member = 2;</code>
     * @return \Admin\UnlockEventAwardsRequest\Member|null
     */
    public function getMember()
    {
        return $this->member;
    }

    public function hasMember()
    {
        return isset($this->member);
    }

    public function clearMember()
    {
        unset($this->member);
    }

    /**
     * Generated from protobuf field <code>.admin.UnlockEventAwardsRequest.Member member = 2;</code>
     * @param \Admin\UnlockEventAwardsRequest\Member $var
     * @return $this
     */
    public function setMember($var)
    {
        GPBUtil::checkMessage($var, \Admin\UnlockEventAwardsRequest\Member::class);
        $this->member = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string event_wallet_code = 3;</code>
     * @return string
     */
    public function getEventWalletCode()
    {
        return $this->event_wallet_code;
    }

    /**
     * Generated from protobuf field <code>string event_wallet_code = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setEventWalletCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->event_wallet_code = $var;

        return $this;
    }

}

