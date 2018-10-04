<?php
require '../vendor/autoload.php';

use \Demo\HelloWorld as World;
use Demo\Hello\Lara;
use Demo\Hello;

$world = new World();
$lara= new Lara();
$vincent= new Hello\Someone('3A417141');

$mary = new \Demo\Hello\Someone('劉晉源');
$john = new Demo\Hello\Someone('John');
