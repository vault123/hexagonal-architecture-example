<?php
/**
 * @author James Mannion <mannion007@gmail.com>
 * @link https://www.jamse.net
 */

namespace Mannion007\WaffleFactory\Oven;

use Mannion007\WaffleFactory\Model\Waffle;
use Mannion007\WaffleFactory\Model\WaffleBatter;

class CheapoOven implements OvenInterface
{
    /** @var int $watts */
    private $watts = 50;

    public function bakeWaffles(WaffleBatter $batter, int $number) : array
    {
        $waffles = [];

        for ($i=0; $i <= $number; $i++) {
            $waffle = new Waffle($batter);
            $waffle->cook($this->watts);
            $waffles[] = $waffle;

        }

        return $waffles;
    }
}
