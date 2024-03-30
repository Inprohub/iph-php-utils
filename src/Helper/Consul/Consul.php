<?php

namespace Inprohub\Utils\Helper\Consul;

class Consul
{
    /**
     * @param string $consulAddress
     * @param string $serviceName
     * @return string|null
     */
    public static function getServiceFromConsul(string $consulAddress, string $serviceName): string|null
    {
        $url = "{$consulAddress}/v1/health/service/{$serviceName}?passing";

        // 使用 cURL 執行 HTTP 請求
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        curl_close($ch);

        $services = json_decode($response, true);

        // 從服務列表中隨機選擇一個健康的實例
        if (!empty($services)) {
            $healthyServices = [];
            foreach ($services as $service) {
                $healthyServices[] = [
                    'address' => $service['Service']['Address'],
                    'port' => $service['Service']['Port']
                ];
            }
            $randomService = $healthyServices[array_rand($healthyServices)];
            return $randomService['address'] . ':' . $randomService['port'];
        } else {
            return null;
        }
    }
}