<?php

namespace Andres;

require '../vendor/autoload.php';

$oracle = new Unit('Linux', new Weapons\BasicSword);

$oracle->setArmor(new Armors\SilverArmor());

$linux = new Unit('Oracle', new Weapons\FireBow);

$linux->attack($oracle);

$linux->attack($oracle);

$oracle->attack($linux);