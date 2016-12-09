<?php
/**
 * @author James Mannion <mannion007@gmail.com>
 */

namespace Mannion007\WaffleFactory\Model;

use Ramsey\Uuid\Uuid;

class Waffle
{
    public $waffleId;
    private $state;
    private $batter;

    /**
     * @param WaffleBatter $batter
     */
    public function __construct(WaffleBatter $batter)
    {
        $this->waffleId = Uuid::uuid4();
        $this->batter = $batter;
    }

    /**
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

    /**
     * @return array
     */
    public function json_encode()
    {
        return [
            'waffleId'  => $this->waffleId,
            'state'     => $this->state,
            'batter'    => $this->batter
        ];
    }
}
