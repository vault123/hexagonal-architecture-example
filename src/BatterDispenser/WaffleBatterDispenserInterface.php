<?php
/**
 * @author James Mannion <mannion007@gmail.com>
 * @link https://www.jamse.net
 */

namespace Mannion007\WaffleFactory\BatterDispenser;

use Mannion007\WaffleFactory\Model\WaffleBatter;

interface WaffleBatterDispenserInterface
{
    /**
     * Dispense some waffle batter
     *
     * @return WaffleBatter
     */
    public function dispense() : WaffleBatter;
}