<?php
/**
 * @author James Mannion <mannion007@gmail.com>
 * @link https://www.jamse.net
 */

namespace Mannion007\WaffleFactory\Model;

class Waffle
{
    private $state;
    private $batter;

    /**
     * Waffle constructor.
     * @param WaffleBatter $batter
     */
    public function __construct(WaffleBatter $batter)
    {
        $this->batter = $batter;
    }

    /**
     * Cook the waffle
     *
     * @param int $watts
     */
    public function cook(int $watts)
    {
        if ($watts < 100) {
            $this->state = 'raw';
        } elseif ($watts <= 300) {
            $this->state = 'cooked';
        }
        $this->state = 'burnt';
    }
}
