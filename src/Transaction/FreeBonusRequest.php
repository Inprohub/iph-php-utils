<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/grpc/src/transaction.proto

namespace Transaction;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>transaction.FreeBonusRequest</code>
 */
class FreeBonusRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string opCode = 1;</code>
     */
    protected $opCode = '';
    /**
     * Generated from protobuf field <code>string account = 2;</code>
     */
    protected $account = '';
    /**
     * Generated from protobuf field <code>double amount = 3;</code>
     */
    protected $amount = 0.0;
    /**
     * Generated from protobuf field <code>string orderNo = 4;</code>
     */
    protected $orderNo = '';
    /**
     * Generated from protobuf field <code>string gameBrand = 5;</code>
     */
    protected $gameBrand = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $opCode
     *     @type string $account
     *     @type float $amount
     *     @type string $orderNo
     *     @type string $gameBrand
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
     * Generated from protobuf field <code>string account = 2;</code>
     * @return string
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Generated from protobuf field <code>string account = 2;</code>
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
     * Generated from protobuf field <code>string orderNo = 4;</code>
     * @return string
     */
    public function getOrderNo()
    {
        return $this->orderNo;
    }

    /**
     * Generated from protobuf field <code>string orderNo = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderNo($var)
    {
        GPBUtil::checkString($var, True);
        $this->orderNo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string gameBrand = 5;</code>
     * @return string
     */
    public function getGameBrand()
    {
        return $this->gameBrand;
    }

    /**
     * Generated from protobuf field <code>string gameBrand = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setGameBrand($var)
    {
        GPBUtil::checkString($var, True);
        $this->gameBrand = $var;

        return $this;
    }

}
