<?php

namespace Andres\Armors;

use Andres\Armor;
use Andres\Attack;

class SilverArmor extends Armor
{
    public function absorbPhysicalDamage(Attack $attack)
    {
        return $attack->getDamage() / 3;
    }
}