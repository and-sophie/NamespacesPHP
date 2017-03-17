<?php

include 'FooSpace/Foo.php';
include 'BarSpace/Bar.php';

use BarSpace\Bar as Bar;
use FooSpace\Foo as Foo;

$foo = new Foo();

$foo->hello();
$foo->showNamespace();


$bar = new Bar();

$bar->hello();
$bar->showNamespace();
