<?php

namespace Andres\Weapons;

use Andres\Weapon;
use Andres\Unit;

class CrossBow extends Weapon
{
    protected $damage = 40;
    protected $description = ':unit dispara una flecha a :opponent';
}