<?php
/**
 * @author James Mannion <mannion007@gmail.com>
 */

namespace Mannion007\WaffleFactory\Delivery;

interface DeliveryInterface
{
    public function deliverWaffles(array $waffles);
}