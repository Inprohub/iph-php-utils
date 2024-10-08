<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/grpc/src/transaction.proto

namespace Transaction;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>transaction.TransferAmountBetweenMembersRequest</code>
 */
class TransferAmountBetweenMembersRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string opCode = 1;</code>
     */
    protected $opCode = '';
    /**
     * Generated from protobuf field <code>string fromAccount = 2;</code>
     */
    protected $fromAccount = '';
    /**
     * Generated from protobuf field <code>string toAccount = 3;</code>
     */
    protected $toAccount = '';
    /**
     * Generated from protobuf field <code>double amount = 4;</code>
     */
    protected $amount = 0.0;
    /**
     * Generated from protobuf field <code>double minTransfer = 5;</code>
     */
    protected $minTransfer = 0.0;
    /**
     * Generated from protobuf field <code>string feeOpen = 6;</code>
     */
    protected $feeOpen = '';
    /**
     * Generated from protobuf field <code>double feeRate = 7;</code>
     */
    protected $feeRate = 0.0;
    /**
     * Generated from protobuf field <code>double fixedFee = 8;</code>
     */
    protected $fixedFee = 0.0;
    /**
     * Generated from protobuf field <code>optional double bonus = 9;</code>
     */
    protected $bonus = null;
    /**
     * Generated from protobuf field <code>string fromTransType = 10;</code>
     */
    protected $fromTransType = '';
    /**
     * Generated from protobuf field <code>string toTransType = 11;</code>
     */
    protected $toTransType = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $opCode
     *     @type string $fromAccount
     *     @type string $toAccount
     *     @type float $amount
     *     @type float $minTransfer
     *     @type string $feeOpen
     *     @type float $feeRate
     *     @type float $fixedFee
     *     @type float $bonus
     *     @type string $fromTransType
     *     @type string $toTransType
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Src\Grpc\Src\Transaction::initOnce();
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
     * Generated from protobuf field <code>string fromAccount = 2;</code>
     * @return string
     */
    public function getFromAccount()
    {
        return $this->fromAccount;
    }

    /**
     * Generated from protobuf field <code>string fromAccount = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFromAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->fromAccount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string toAccount = 3;</code>
     * @return string
     */
    public function getToAccount()
    {
        return $this->toAccount;
    }

    /**
     * Generated from protobuf field <code>string toAccount = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setToAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->toAccount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double amount = 4;</code>
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Generated from protobuf field <code>double amount = 4;</code>
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
     * Generated from protobuf field <code>double minTransfer = 5;</code>
     * @return float
     */
    public function getMinTransfer()
    {
        return $this->minTransfer;
    }

    /**
     * Generated from protobuf field <code>double minTransfer = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setMinTransfer($var)
    {
        GPBUtil::checkDouble($var);
        $this->minTransfer = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string feeOpen = 6;</code>
     * @return string
     */
    public function getFeeOpen()
    {
        return $this->feeOpen;
    }

    /**
     * Generated from protobuf field <code>string feeOpen = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setFeeOpen($var)
    {
        GPBUtil::checkString($var, True);
        $this->feeOpen = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double feeRate = 7;</code>
     * @return float
     */
    public function getFeeRate()
    {
        return $this->feeRate;
    }

    /**
     * Generated from protobuf field <code>double feeRate = 7;</code>
     * @param float $var
     * @return $this
     */
    public function setFeeRate($var)
    {
        GPBUtil::checkDouble($var);
        $this->feeRate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double fixedFee = 8;</code>
     * @return float
     */
    public function getFixedFee()
    {
        return $this->fixedFee;
    }

    /**
     * Generated from protobuf field <code>double fixedFee = 8;</code>
     * @param float $var
     * @return $this
     */
    public function setFixedFee($var)
    {
        GPBUtil::checkDouble($var);
        $this->fixedFee = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional double bonus = 9;</code>
     * @return float
     */
    public function getBonus()
    {
        return isset($this->bonus) ? $this->bonus : 0.0;
    }

    public function hasBonus()
    {
        return isset($this->bonus);
    }

    public function clearBonus()
    {
        unset($this->bonus);
    }

    /**
     * Generated from protobuf field <code>optional double bonus = 9;</code>
     * @param float $var
     * @return $this
     */
    public function setBonus($var)
    {
        GPBUtil::checkDouble($var);
        $this->bonus = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string fromTransType = 10;</code>
     * @return string
     */
    public function getFromTransType()
    {
        return $this->fromTransType;
    }

    /**
     * Generated from protobuf field <code>string fromTransType = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setFromTransType($var)
    {
        GPBUtil::checkString($var, True);
        $this->fromTransType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string toTransType = 11;</code>
     * @return string
     */
    public function getToTransType()
    {
        return $this->toTransType;
    }

    /**
     * Generated from protobuf field <code>string toTransType = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setToTransType($var)
    {
        GPBUtil::checkString($var, True);
        $this->toTransType = $var;

        return $this;
    }

}

