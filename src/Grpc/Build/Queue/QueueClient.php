<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Grpc\Build\Queue;

/**
 */
class QueueClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Grpc\Build\Queue\BetlogReportExportRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BetlogReportExport(\Grpc\Build\Queue\BetlogReportExportRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/queue.Queue/BetlogReportExport',
        $argument,
        ['\Grpc\Build\Queue\BetlogReportExportResponse', 'decode'],
        $metadata, $options);
    }

}
