<?php
/**
 * @author James Mannion <mannion007@gmail.com>
 * @link https://www.jamse.net
 */

namespace Mannion007\WaffleFactory\Server;

use Mannion007\WaffleFactory\Maker\WaffleMakerInterface;

class RestfulApi implements DispenserAdapterInterface
{
    /** @var WaffleMakerInterface */
    private $waffleMaker;

    /**
     * RestfulApiAdapter constructor.
     * @param WaffleMakerInterface $waffleMaker
     */
    public function __construct(WaffleMakerInterface $waffleMaker)
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
