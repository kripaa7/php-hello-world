<?php
require_once __DIR__ . '/src/HelloInterface.php';
require_once __DIR__ . '/src/Hello.php';

use Silarhi\Hello;

$hello = new Hello();
echo $hello->display();