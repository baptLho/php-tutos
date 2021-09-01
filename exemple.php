<?php

use \Tutoriel\Autoloader;

namespace Tutoriel;



require 'class/Autoloader.php';

Autoloader::register();
// require 'Personnage.php';
// require 'Archer.php';

$merlin = new Personnage('merlin');

$harry = new Personnage('harry');

$legloas = new Personnage('legloas');

$legloas->attaque($harry);
var_dump($merlin);
