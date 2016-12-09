<?php

/**
 * @author James Mannion <mannion007@gmail.com>
 */

namespace Mannion007\WaffleFactory\Maker;

interface MakerInterface
{
    /**
     * @param int $number
     * @return array
     */
    public function makeWaffles(int $number) : array;
}
