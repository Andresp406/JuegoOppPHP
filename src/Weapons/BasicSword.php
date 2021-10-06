<?php

namespace Andres\Weapons;

use Andres\Weapon;
use Andres\Unit;

class BasicSword extends Weapon
{
    protected $damage = 40;
    protected $description = ":unit ataca con la espada a :opponent";
}