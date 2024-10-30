<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Grpc\Build\Admin;

/**
 */
class AdminServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Grpc\Build\Admin\UnlockEventAwardsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UnlockEventAward(\Grpc\Build\Admin\UnlockEventAwardsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/admin.AdminService/UnlockEventAward',
        $argument,
        ['\Grpc\Build\Admin\EmptyResponse', 'decode'],
        $metadata, $options);
    }

}
