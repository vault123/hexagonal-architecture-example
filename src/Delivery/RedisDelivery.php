<?php
/**
 * @author James Mannion <mannion007@gmail.com>
 */

namespace Mannion007\WaffleFactory\Delivery;

use Mannion007\WaffleFactory\Model\Waffle;

class RedisDelivery implements DeliveryInterface
{
    const KEY_FORMAT = 'waffle_%s';

    /**
     * @var \Redis $redis
     */
    private $redis;

    /**
     * @param $host
     * @param $port
     */
    public function __construct($host, $port)
    {
        $this->redis = new \Redis();
        $this->redis->connect($host, $port);
    }

    public function deliverWaffles(array $waffles)
    {
        foreach ($waffles as $waffle) {
            $this->deliverWaffle($waffle);
        }
        $this->redis->bgsave();
    }

    /**
     * @param Waffle $waffle
     */
    private function deliverWaffle(Waffle $waffle)
    {
        $this->redis->set(
            sprintf(self::KEY_FORMAT, $waffle->waffleId),
            json_encode($waffle)
        );
    }
}
