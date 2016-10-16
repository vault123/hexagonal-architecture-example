<?php
/**
 * @author James Mannion <mannion007@gmail.com>
 * @link https://www.jamse.net
 */

namespace Mannion007\WaffleFactory\Delivery;

use Mannion007\WaffleFactory\Maker\MakerInterface;

class RestfulApiDelivery implements DeliveryInterface
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
     * @param array $waffles
     */
    public function deliverWaffles(array $waffles)
    {
        var_dump($waffles);
    }
}
