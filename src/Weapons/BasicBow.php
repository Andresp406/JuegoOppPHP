<?php

namespace Andres\Weapons;

use Andres\Weapon;
use Andres\Unit;

class BasicBow extends Weapon
{
    protected $damage = 20;
    protected $description = ':unit dispara una flecha :opponent';
}