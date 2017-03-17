<?php

use BarSpace\Bar as Bar;
use FooSpace\Foo as Foo;

spl_autoload('foospace\foo');
spl_autoload('barspace\bar');

$foo = new Foo();

$foo->hello();
$foo->showNamespace();


$bar = new Bar();

$bar->hello();
$bar->showNamespace();
