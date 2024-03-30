<?php

namespace Tests\Grpc;

use Grpc\Build\Game\GameClient;
use Grpc\Build\Game\GetBetlogDetailRequest;
use Grpc\ChannelCredentials;
use PHPUnit\Framework\TestCase;

class GrpcTest extends TestCase
{
    public function testGameGrpcClient(): void
    {
        $host = 'host.docker.internal:8081';
        $opCode = 'iphd';
        $lang = 'zh-CN';
        $traceId = 'iphd-1710420525879174303-testuser09';
        $gameClient = new GameClient($host, [
            'credentials' => ChannelCredentials::createInsecure(),
        ]);
        $request = new GetBetlogDetailRequest(compact('opCode', 'lang', 'traceId'));
        list($response , $status) = $gameClient->getBetlogDetail($request)->wait();
        echo "ERROR: " . $status->code . ", " . $status->details . PHP_EOL;
        $this->assertSame(\Grpc\STATUS_OK, $status->code);
    }
}