<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Grpc\Build\Payment;

/**
 */
class PaymentClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Grpc\Build\Payment\DepositRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Deposit(\Grpc\Build\Payment\DepositRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/payment.Payment/Deposit',
        $argument,
        ['\Grpc\Build\Payment\DepositResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Grpc\Build\Payment\WithdrawRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Withdraw(\Grpc\Build\Payment\WithdrawRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/payment.Payment/Withdraw',
        $argument,
        ['\Grpc\Build\Payment\WithdrawResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Grpc\Build\Payment\NotifySignCheckRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DepositNotifySignCheck(\Grpc\Build\Payment\NotifySignCheckRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/payment.Payment/DepositNotifySignCheck',
        $argument,
        ['\Grpc\Build\Payment\NotifySignCheckResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Grpc\Build\Payment\NotifySignCheckRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function WithdrawNotifySignCheck(\Grpc\Build\Payment\NotifySignCheckRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/payment.Payment/WithdrawNotifySignCheck',
        $argument,
        ['\Grpc\Build\Payment\NotifySignCheckResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Grpc\Build\Payment\DepositQueryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DepositQuery(\Grpc\Build\Payment\DepositQueryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/payment.Payment/DepositQuery',
        $argument,
        ['\Grpc\Build\Payment\DepositQueryResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Grpc\Build\Payment\WithdrawQueryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function WithdrawQuery(\Grpc\Build\Payment\WithdrawQueryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/payment.Payment/WithdrawQuery',
        $argument,
        ['\Grpc\Build\Payment\WithdrawQueryResponse', 'decode'],
        $metadata, $options);
    }

}
