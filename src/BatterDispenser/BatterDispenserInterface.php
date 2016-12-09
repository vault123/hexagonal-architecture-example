<?php
/**
 * @author James Mannion <mannion007@gmail.com>
 */

namespace Mannion007\WaffleFactory\BatterDispenser;

use Mannion007\WaffleFactory\Model\WaffleBatter;

interface BatterDispenserInterface
{
    /**
     * Dispense some waffle batter
     *
     * @return WaffleBatter
     */
    public function dispense() : WaffleBatter;
}