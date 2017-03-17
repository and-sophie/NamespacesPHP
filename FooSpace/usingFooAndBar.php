<?php
namespace FooSpace;

include 'Foo.php';
include 'BarSpace/Bar.php';

use BarSpace\Bar;


$foo = new Foo();

$foo->hello();
$foo->showNamespace();


$bar = new Bar();

$bar->hello();
$bar->showNamespace();
