<?php
namespace FooSpace;

include 'Foo.php';
include 'BarSpace/Bar.php';

$foo = new Foo();

$foo->hello();


$bar = new BarSpace\Bar();

$bar->hello();
