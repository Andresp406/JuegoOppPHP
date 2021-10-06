<?php

namespace Andres\Armors;

use Andres\Armor;
use Andres\Attack;

class MissingArmor extends Armor
{
    public function absorbDamage(Attack $attack)
    {
        return $attack->getDamage();
    }
}