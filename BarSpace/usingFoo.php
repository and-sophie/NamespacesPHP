<?php
namespace BarSpace;

include 'FooSpace/Foo.php';

use FooSpace\Foo as Foo;

$foo = new Foo();

$foo->hello();
$foo->showNamespace();
