<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Grpc\Build\Transaction;

/**
 */
class TransactionClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Grpc\Build\Transaction\MemberWalletRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getMemberWallet(\Grpc\Build\Transaction\MemberWalletRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/getMemberWallet',
        $argument,
        ['\Grpc\Build\Transaction\MemberWalletResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Grpc\Build\Transaction\MemberWalletsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getMemberWallets(\Grpc\Build\Transaction\MemberWalletsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/getMemberWallets',
        $argument,
        ['\Grpc\Build\Transaction\MemberWalletsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Grpc\Build\Transaction\OpEnableWalletRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getOpEnableWallets(\Grpc\Build\Transaction\OpEnableWalletRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/getOpEnableWallets',
        $argument,
        ['\Grpc\Build\Transaction\OpEnableWalletResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Grpc\Build\Transaction\SyncMemberWalletsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function syncMemberWallets(\Grpc\Build\Transaction\SyncMemberWalletsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/syncMemberWallets',
        $argument,
        ['\Grpc\Build\Transaction\SyncMemberWalletsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Grpc\Build\Transaction\TransferRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function transferIn(\Grpc\Build\Transaction\TransferRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/transferIn',
        $argument,
        ['\Grpc\Build\Transaction\BaseTransferResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Grpc\Build\Transaction\TransferRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function transferOut(\Grpc\Build\Transaction\TransferRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/transferOut',
        $argument,
        ['\Grpc\Build\Transaction\BaseTransferResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Grpc\Build\Transaction\TransferRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function gameTransferIn(\Grpc\Build\Transaction\TransferRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/gameTransferIn',
        $argument,
        ['\Grpc\Build\Transaction\BaseTransferResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Grpc\Build\Transaction\TransferRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function gameTransferOut(\Grpc\Build\Transaction\TransferRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/gameTransferOut',
        $argument,
        ['\Grpc\Build\Transaction\BaseTransferResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Grpc\Build\Transaction\TransferRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function deposit(\Grpc\Build\Transaction\TransferRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/deposit',
        $argument,
        ['\Grpc\Build\Transaction\BaseTransferResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Grpc\Build\Transaction\TransferRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function withdrawal(\Grpc\Build\Transaction\TransferRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/withdrawal',
        $argument,
        ['\Grpc\Build\Transaction\BaseTransferResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Grpc\Build\Transaction\TransferRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function stakePayout(\Grpc\Build\Transaction\TransferRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/stakePayout',
        $argument,
        ['\Grpc\Build\Transaction\BaseTransferResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Grpc\Build\Transaction\TransferRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function stake(\Grpc\Build\Transaction\TransferRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/stake',
        $argument,
        ['\Grpc\Build\Transaction\BaseTransferResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Grpc\Build\Transaction\TransferRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function payoff(\Grpc\Build\Transaction\TransferRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/payoff',
        $argument,
        ['\Grpc\Build\Transaction\BaseTransferResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Grpc\Build\Transaction\TransferRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function cancelStake(\Grpc\Build\Transaction\TransferRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/cancelStake',
        $argument,
        ['\Grpc\Build\Transaction\BaseTransferResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Grpc\Build\Transaction\TransferRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function cancelPayout(\Grpc\Build\Transaction\TransferRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/cancelPayout',
        $argument,
        ['\Grpc\Build\Transaction\BaseTransferResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Grpc\Build\Transaction\TransferWithRebateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function bonus(\Grpc\Build\Transaction\TransferWithRebateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/bonus',
        $argument,
        ['\Grpc\Build\Transaction\TransferWithRebateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Grpc\Build\Transaction\FreeBonusRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function freeBonus(\Grpc\Build\Transaction\FreeBonusRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/freeBonus',
        $argument,
        ['\Grpc\Build\Transaction\BaseTransferResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Grpc\Build\Transaction\TransferAmountBetweenWalletsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function transferAmountBetweenWallets(\Grpc\Build\Transaction\TransferAmountBetweenWalletsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/transferAmountBetweenWallets',
        $argument,
        ['\Grpc\Build\Transaction\BaseTransferResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Grpc\Build\Transaction\StakeWithBetlogRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function stakeWithBetlog(\Grpc\Build\Transaction\StakeWithBetlogRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/stakeWithBetlog',
        $argument,
        ['\Grpc\Build\Transaction\GameTransResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Grpc\Build\Transaction\PayoffWithBetlogRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function payoffWithBetlog(\Grpc\Build\Transaction\PayoffWithBetlogRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/payoffWithBetlog',
        $argument,
        ['\Grpc\Build\Transaction\GameTransResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Grpc\Build\Transaction\CancelStakeWithBetlogRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function cancelStakeWithBetlog(\Grpc\Build\Transaction\CancelStakeWithBetlogRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/cancelStakeWithBetlog',
        $argument,
        ['\Grpc\Build\Transaction\GameTransResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Grpc\Build\Transaction\MarkSourceWalletRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function markSourceWallet(\Grpc\Build\Transaction\MarkSourceWalletRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/markSourceWallet',
        $argument,
        ['\Grpc\Build\Transaction\MarkSourceWalletResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * line liff payment 專用
     * @param \Grpc\Build\Transaction\TransferAmountBetweenMembersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function transferAmountBetweenMembers(\Grpc\Build\Transaction\TransferAmountBetweenMembersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/transferAmountBetweenMembers',
        $argument,
        ['\Grpc\Build\Transaction\TransferAmountBetweenMembersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * member gift redemption
     * @param \Grpc\Build\Transaction\MemberGiftRedemptionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function memberGiftRedemption(\Grpc\Build\Transaction\MemberGiftRedemptionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/memberGiftRedemption',
        $argument,
        ['\Grpc\Build\Transaction\MemberGiftRedemptionResponse', 'decode'],
        $metadata, $options);
    }

}
