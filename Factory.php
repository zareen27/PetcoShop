<?php


namespace Overtrue\LaravelPayment;

use Omnipay\Common\GatewayInterface;
use Omnipay\Omnipay;
class Factory
{    public static function make(string $driver, array $options)
    {
        $driver = Omnipay::create($driver);

        self::applyDriverOptions($options, $driver);

        return $driver;
    }    protected static function formatOptions(array $options): array
    {
        $formatted = [];

        foreach ($options as $key => $value) {
            $formatted[camel_case($key)] = $value;
        }

        return $formatted;
    }
    protected static function applyDriverOptions(array $options, GatewayInterface $gateway)
    {
        $gatewayMethods = get_class_methods($gateway);

        foreach (self::formatOptions($options) as $key => $value) {
            $method = 'set'.ucfirst($key);

            if (in_array($method, $gatewayMethods)) {
                call_user_func_array([$gateway, $method], (array) $value);
            }
        }
    }
}
