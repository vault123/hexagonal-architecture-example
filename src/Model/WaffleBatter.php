<?php
/**
 * @author James Mannion <mannion007@gmail.com>
 */

namespace Mannion007\WaffleFactory\Model;

class WaffleBatter
{
    private $quality;

    /**
     * @param string $quality
     */
    public function __construct(string $quality)
    {
        $this->quality = $quality;
    }
}