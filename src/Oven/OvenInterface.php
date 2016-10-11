<?php
/**
 * @author James Mannion <mannion007@gmail.com>
 * @link https://www.jamse.net
 */

namespace Mannion007\WaffleFactory\Oven;

use Mannion007\WaffleFactory\Model\WaffleBatter;

interface OvenInterface
{
    /**
     * Bakes waffle batter
     *
     * @param WaffleBatter $batter
     * @param int $number
     * @return array
     */
    public function bakeWaffles(WaffleBatter $batter, int $number) : array;
}
