<?php

use BarSpace\Bar;
use FooSpace\Foo;

function __autoload($class) {
  $path = str_replace('\\', '/', $class) . '.php';
  require_once($path);
}


$foo = new Foo();

$foo->hello();
$foo->showNamespace();


$bar = new Bar();

$bar->hello();
$bar->showNamespace();
