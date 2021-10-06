<?php

namespace Andres\Armors;

use Andres\Armor;
use Andres\Attack;

class BronzeArmor extends Armor
{
    public function absorbDamage(Attack $attack)
    {
        return $attack->getDamage() / 2;
    }
}