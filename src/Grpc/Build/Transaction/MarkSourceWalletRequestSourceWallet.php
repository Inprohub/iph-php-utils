<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/grpc/src/transaction.proto

namespace Grpc\Build\Transaction;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>transaction.MarkSourceWalletRequestSourceWallet</code>
 */
class MarkSourceWalletRequestSourceWallet extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string value = 1;</code>
     */
    protected $value = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $value
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Src\Grpc\Src\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string value = 1;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>string value = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;

        return $this;
    }

}

