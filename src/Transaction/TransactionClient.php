<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Transaction;

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
     * @param \Transaction\MemberWalletRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getMemberWallet(\Transaction\MemberWalletRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/getMemberWallet',
        $argument,
        ['\Transaction\MemberWalletResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Transaction\MemberWalletsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getMemberWallets(\Transaction\MemberWalletsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/getMemberWallets',
        $argument,
        ['\Transaction\MemberWalletsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Transaction\OpEnableWalletRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getOpEnableWallets(\Transaction\OpEnableWalletRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/getOpEnableWallets',
        $argument,
        ['\Transaction\OpEnableWalletResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Transaction\SyncMemberWalletsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function syncMemberWallets(\Transaction\SyncMemberWalletsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/syncMemberWallets',
        $argument,
        ['\Transaction\SyncMemberWalletsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * rpc getNotCloseMemberWallets(MemberWalletsRequest) returns (MemberWalletsResponse);
     * @param \Transaction\TransferRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function transferIn(\Transaction\TransferRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/transferIn',
        $argument,
        ['\Transaction\BaseTransferResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Transaction\TransferRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function transferOut(\Transaction\TransferRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/transferOut',
        $argument,
        ['\Transaction\BaseTransferResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Transaction\TransferRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function gameTransferIn(\Transaction\TransferRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/gameTransferIn',
        $argument,
        ['\Transaction\BaseTransferResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Transaction\TransferRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function gameTransferOut(\Transaction\TransferRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/gameTransferOut',
        $argument,
        ['\Transaction\BaseTransferResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Transaction\TransferRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function deposit(\Transaction\TransferRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/deposit',
        $argument,
        ['\Transaction\BaseTransferResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Transaction\TransferRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function withdrawal(\Transaction\TransferRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/withdrawal',
        $argument,
        ['\Transaction\BaseTransferResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Transaction\TransferRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function stakePayout(\Transaction\TransferRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/stakePayout',
        $argument,
        ['\Transaction\BaseTransferResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Transaction\TransferRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function stake(\Transaction\TransferRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/stake',
        $argument,
        ['\Transaction\BaseTransferResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Transaction\TransferRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function payoff(\Transaction\TransferRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/payoff',
        $argument,
        ['\Transaction\BaseTransferResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Transaction\TransferRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function cancelStake(\Transaction\TransferRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/cancelStake',
        $argument,
        ['\Transaction\BaseTransferResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Transaction\TransferRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function cancelPayout(\Transaction\TransferRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/cancelPayout',
        $argument,
        ['\Transaction\BaseTransferResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Transaction\TransferWithRebateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function bonus(\Transaction\TransferWithRebateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/bonus',
        $argument,
        ['\Transaction\TransferWithRebateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Transaction\FreeBonusRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function freeBonus(\Transaction\FreeBonusRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/freeBonus',
        $argument,
        ['\Transaction\BaseTransferResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Transaction\TransferAmountBetweenWalletsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function transferAmountBetweenWallets(\Transaction\TransferAmountBetweenWalletsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/transferAmountBetweenWallets',
        $argument,
        ['\Transaction\BaseTransferResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Transaction\StakeWithBetlogRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function stakeWithBetlog(\Transaction\StakeWithBetlogRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/stakeWithBetlog',
        $argument,
        ['\Transaction\GameTransResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Transaction\PayoffWithBetlogRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function payoffWithBetlog(\Transaction\PayoffWithBetlogRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/payoffWithBetlog',
        $argument,
        ['\Transaction\GameTransResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Transaction\CancelStakeWithBetlogRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function cancelStakeWithBetlog(\Transaction\CancelStakeWithBetlogRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/cancelStakeWithBetlog',
        $argument,
        ['\Transaction\GameTransResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * line liff payment 專用
     * @param \Transaction\TransferAmountBetweenMembersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function transferAmountBetweenMembers(\Transaction\TransferAmountBetweenMembersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/transferAmountBetweenMembers',
        $argument,
        ['\Transaction\TransferAmountBetweenMembersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * member gift redemption
     * @param \Transaction\MemberGiftRedemptionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function memberGiftRedemption(\Transaction\MemberGiftRedemptionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.Transaction/memberGiftRedemption',
        $argument,
        ['\Transaction\MemberGiftRedemptionResponse', 'decode'],
        $metadata, $options);
    }

}
