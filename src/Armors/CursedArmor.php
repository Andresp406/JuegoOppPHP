<?php

namespace Andres\Armors;

use Andres\Armor;
use Andres\Attack;

class CursedArmor extends Armor
{
    public function absorbDamage(Attack $Attack)
    {
        return $attack->getDamage() * 2;
    }
}