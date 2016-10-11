<?php
/**
 * @author James Mannion <mannion007@gmail.com>
 * @link https://www.jamse.net
 */

namespace Mannion007\WaffleFactory\Maker;

use Mannion007\WaffleFactory\Oven\OvenInterface;
use Mannion007\WaffleFactory\BatterDispenser\WaffleBatterDispenserInterface;

class HomeMadeWaffleMaker implements WaffleMakerInterface
{
    /** @var  WaffleBatterDispenserInterface */
    private $batterDispenser;

    /** @var OvenInterface */
    private $oven;

    /**
     * HomeBaker constructor.
     * @param WaffleBatterDispenserInterface $batterDispenser
     * @param OvenInterface $oven
     */
    public function __construct(WaffleBatterDispenserInterface $batterDispenser, OvenInterface $oven)
    {
        $this->batterDispenser = $batterDispenser;
        $this->oven = $oven;
    }

    /**
     * Make waffles
     *
     * @param int $number
     * @return array
     */
    public function makeWaffles(int $number) : array
    {
        return $this->oven->bakeWaffles($this->batterDispenser->dispense(), $number);
    }
}
