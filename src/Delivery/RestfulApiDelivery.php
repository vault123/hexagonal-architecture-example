<?php
/**
 * @author James Mannion <mannion007@gmail.com>
 * @link https://www.jamse.net
 */

namespace Mannion007\WaffleFactory\Server;

use Mannion007\WaffleFactory\Maker\MakerInterface;

class RestfulApiDispenser implements DeliveryInterface
{
    /** @var MakerInterface */
    private $waffleMaker;

    /**
     * RestfulApiAdapter constructor.
     * @param MakerInterface $waffleMaker
     */
    public function __construct(MakerInterface $waffleMaker)
    {
        $this->waffleMaker = $waffleMaker;
    }

    /**
     * @param int $number
     * @return string
     */
    public function dispenseWaffles(int $number)
    {
        var_dump($this->waffleMaker->makeWaffles($number));
    }
}
