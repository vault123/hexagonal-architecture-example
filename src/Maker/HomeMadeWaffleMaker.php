<?php
/**
 * @author James Mannion <mannion007@gmail.com>
 */

namespace Mannion007\WaffleFactory\Maker;

use Mannion007\WaffleFactory\Delivery\DeliveryInterface;
use Mannion007\WaffleFactory\Oven\OvenInterface;
use Mannion007\WaffleFactory\BatterDispenser\BatterDispenserInterface;

class HomeMadeWaffleMaker implements MakerInterface
{
    /** @var  BatterDispenserInterface */
    private $batterDispenser;

    /** @var OvenInterface */
    private $oven;

    /** @var DeliveryInterface */
    private $delivery;

    /**
     * @param BatterDispenserInterface $batterDispenser
     * @param OvenInterface $oven
     * @param DeliveryInterface $delivery
     */
    public function __construct(
        BatterDispenserInterface $batterDispenser,
        OvenInterface $oven,
        DeliveryInterface $delivery
    ) {
        $this->batterDispenser = $batterDispenser;
        $this->oven = $oven;
        $this->delivery = $delivery;
    }

    /**
     * @param int $number
     * @return array
     */
    public function makeWaffles(int $number) : array
    {
        return $this->delivery->deliverWaffles(
            $this->oven->bakeWaffles(
                $this->batterDispenser->dispense(),
                $number
            )
        );
    }
}
