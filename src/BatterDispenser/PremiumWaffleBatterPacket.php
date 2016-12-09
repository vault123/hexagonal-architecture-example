<?php
/**
 * @author James Mannion <mannion007@gmail.com>
 */

namespace Mannion007\WaffleFactory\BatterDispenser;

use Mannion007\WaffleFactory\Model\WaffleBatter;

class PremiumWaffleBatterPacket implements BatterDispenserInterface
{
    /**
     * @return WaffleBatter
     */
    public function dispense() : WaffleBatter
    {
        return new WaffleBatter('exquisite');
    }
}
