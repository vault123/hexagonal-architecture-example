<?php
/**
 * @author James Mannion <mannion007@gmail.com>
 * @link https://www.jamse.net
 */

namespace Mannion007\WaffleFactory\Server;

interface WaffleDispenserInterface
{
    public function dispenseWaffles(int $number);
}