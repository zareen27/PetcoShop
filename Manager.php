<?php


namespace Overtrue\LaravelPayment;

use Illuminate\Config\Repository;
use Illuminate\Support\Collection;
use Omnipay\Common\GatewayInterface;
class Manager
{
    protected $config;

    protected $gateways = [];
    public function __construct(array $config = [])
    {
        $this->config = new Repository($config);
    }
    public function gateway(string $name = null): GatewayInterface
    {
        if (empty($name)) {
            $name = $this->getDefaultGateway();
        }

        if (empty($this->gateways[$name])) {
            $driver = $this->config->get("gateways.{$name}.driver");

            if (is_null($driver)) {
                throw new \InvalidArgumentException(sprintf('No omnipay driver found for gateway "%s".', $name));
            }

            $this->gateways[$name] = Factory::make($driver, $this->getGatewayOptions($name));
        }

        return $this->gateways[$name];
    }    public function getGatewayOptions(string $name): array
    {
        return array_merge($this->config->get('default_options', []), $this->config->get("gateways.{$name}.options", []));
    }    public function getDefaultGateway()
    {
        $name = $this->config->get('default_gateway');

        if (empty($name)) {
            throw new \Exception('No default gateway configured.');
        }

        return $name;
    }
    public function __call(string $method, array $args)
    {
        return call_user_func([$this->gateway(), $method], ...$args);
    }
}
