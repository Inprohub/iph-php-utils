<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/grpc/src/transaction.proto

namespace Transaction;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>transaction.TransferAmountBetweenMembersResponse</code>
 */
class TransferAmountBetweenMembersResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string account = 1;</code>
     */
    protected $account = '';
    /**
     * Generated from protobuf field <code>double beforeBalance = 2;</code>
     */
    protected $beforeBalance = 0.0;
    /**
     * Generated from protobuf field <code>double amount = 3;</code>
     */
    protected $amount = 0.0;
    /**
     * Generated from protobuf field <code>double balance = 4;</code>
     */
    protected $balance = 0.0;
    /**
     * Generated from protobuf field <code>string traceId = 5;</code>
     */
    protected $traceId = '';
    /**
     * Generated from protobuf field <code>int64 CreatedAt = 6;</code>
     */
    protected $CreatedAt = 0;
    /**
     * Generated from protobuf field <code>string Memo = 7;</code>
     */
    protected $Memo = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $account
     *     @type float $beforeBalance
     *     @type float $amount
     *     @type float $balance
     *     @type string $traceId
     *     @type int|string $CreatedAt
     *     @type string $Memo
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Src\Grpc\Src\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string account = 1;</code>
     * @return string
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Generated from protobuf field <code>string account = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->account = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double beforeBalance = 2;</code>
     * @return float
     */
    public function getBeforeBalance()
    {
        return $this->beforeBalance;
    }

    /**
     * Generated from protobuf field <code>double beforeBalance = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setBeforeBalance($var)
    {
        GPBUtil::checkDouble($var);
        $this->beforeBalance = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double amount = 3;</code>
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Generated from protobuf field <code>double amount = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkDouble($var);
        $this->amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double balance = 4;</code>
     * @return float
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Generated from protobuf field <code>double balance = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setBalance($var)
    {
        GPBUtil::checkDouble($var);
        $this->balance = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string traceId = 5;</code>
     * @return string
     */
    public function getTraceId()
    {
        return $this->traceId;
    }

    /**
     * Generated from protobuf field <code>string traceId = 5;</code>
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
     * Generated from protobuf field <code>int64 CreatedAt = 6;</code>
     * @return int|string
     */
    public function getCreatedAt()
    {
        return $this->CreatedAt;
    }

    /**
     * Generated from protobuf field <code>int64 CreatedAt = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkInt64($var);
        $this->CreatedAt = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Memo = 7;</code>
     * @return string
     */
    public function getMemo()
    {
        return $this->Memo;
    }

    /**
     * Generated from protobuf field <code>string Memo = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setMemo($var)
    {
        GPBUtil::checkString($var, True);
        $this->Memo = $var;

        return $this;
    }

}

