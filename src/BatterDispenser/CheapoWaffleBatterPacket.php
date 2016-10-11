<?php
/**
 * @author James Mannion <mannion007@gmail.com>
 * @link https://www.jamse.net
 */

namespace Mannion007\WaffleFactory\BatterDispenser;

use Mannion007\WaffleFactory\Model\WaffleBatter;

class CheapoWaffleBatterPacket implements WaffleBatterDispenserInterface
{
    /**
     * Dispense some waffle batter
     *
     * @return WaffleBatter
     */
    public function dispense() : WaffleBatter
    {
        return new WaffleBatter();
    }
}
