<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Grpc\Build\Game;

/**
 */
class GameClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Grpc\Build\Game\MemberBalanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getMemberBalance(\Grpc\Build\Game\MemberBalanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/game.Game/getMemberBalance',
        $argument,
        ['\Grpc\Build\Game\MemberBalanceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Grpc\Build\Game\CreateMemberRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function createMember(\Grpc\Build\Game\CreateMemberRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/game.Game/createMember',
        $argument,
        ['\Grpc\Build\Game\CreateMemberResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Grpc\Build\Game\LaunchGameRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function launchGame(\Grpc\Build\Game\LaunchGameRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/game.Game/launchGame',
        $argument,
        ['\Grpc\Build\Game\LaunchGameResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Grpc\Build\Game\TransferInRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function transferIn(\Grpc\Build\Game\TransferInRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/game.Game/transferIn',
        $argument,
        ['\Grpc\Build\Game\TransferResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Grpc\Build\Game\TransferOutRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function transferOut(\Grpc\Build\Game\TransferOutRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/game.Game/transferOut',
        $argument,
        ['\Grpc\Build\Game\TransferResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Grpc\Build\Game\GetPlayerTransactionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getPlayerTransaction(\Grpc\Build\Game\GetPlayerTransactionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/game.Game/getPlayerTransaction',
        $argument,
        ['\Grpc\Build\Game\GetPlayerTransactionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Grpc\Build\Game\GetBetlogDetailRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getBetlogDetail(\Grpc\Build\Game\GetBetlogDetailRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/game.Game/getBetlogDetail',
        $argument,
        ['\Grpc\Build\Game\GetBetlogDetailResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Grpc\Build\Game\GetAllGamesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getAllGames(\Grpc\Build\Game\GetAllGamesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/game.Game/getAllGames',
        $argument,
        ['\Grpc\Build\Game\GetAllGamesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Grpc\Build\Game\GetFavorGamesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getFavorGames(\Grpc\Build\Game\GetFavorGamesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/game.Game/getFavorGames',
        $argument,
        ['\Grpc\Build\Game\GetFavorGamesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * hz
     * @param \Grpc\Build\Game\HZVerifySessionTokenRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function hzVerifySessionToken(\Grpc\Build\Game\HZVerifySessionTokenRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/game.Game/hzVerifySessionToken',
        $argument,
        ['\Grpc\Build\Game\HZVerifySessionTokenResponse', 'decode'],
        $metadata, $options);
    }

}
