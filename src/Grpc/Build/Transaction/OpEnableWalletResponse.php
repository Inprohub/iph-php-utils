<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/grpc/src/transaction.proto

namespace Grpc\Build\Transaction;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>transaction.OpEnableWalletResponse</code>
 */
class OpEnableWalletResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string wallets = 1;</code>
     */
    private $wallets;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $wallets
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Src\Grpc\Src\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string wallets = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWallets()
    {
        return $this->wallets;
    }

    /**
     * Generated from protobuf field <code>repeated string wallets = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWallets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->wallets = $arr;

        return $this;
    }

}

