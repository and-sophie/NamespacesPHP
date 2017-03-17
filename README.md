# PHP namespaces

Learning how to set up and use PHP namespaces.

## Stage 1 - basic set up and usage:

Set up the following folder structure:

```
- FooSpace
  - BarSpace
    | Bar.php
  | Foo.php
  | usingFoo.php
```

In the Foo.php file:  
```
<?php
namespace FooSpace;

class Foo {

  public function hello()
  {
    echo "I'm the Foo class :) \n";
  }

}
```

In the Bar.php file:
```
<?php
namespace FooSpace\BarSpace;

class Bar {

  public function hello()
  {
    echo "I'm the Bar class :) \n";
  }

}
```

In the usingFoo.php file:
```
<?php
namespace FooSpace;

include 'Foo.php';

$foo = new Foo();

$foo->hello();

```

Run
```
php FooSpace/usingFoo.php
```

## Stage 2 - Getting to understand namespace interactions:

Alter the folder structure as so:
```
NamespacesPHP
  - BarSpace
    | Bar.php
  - FooSpace
    | Foo.php
    | usingFoo.php
    | usingFooAndBar.php
  | usingFooAndBar.php    
```

Bar.php:
```
<?php
namespace BarSpace;

class Bar {

  public function hello()
  {
    echo "YAYYYYYYAAAYY  I'm the Bar class :D \n";
  }

  public function showNamespace() {
    echo __NAMESPACE__ . "\n";
  }

}
```

Foo.php:
```
<?php
namespace FooSpace;

class Foo {

  public function hello()
  {
    echo "I'm the Foo class :) \n";
  }

  public function showNamespace() {
    echo __NAMESPACE__ . "\n";
  }

}
```

FooSpace/usingFooAndBar.php:
```
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
```

usingFooAndBar.php:
```
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
```

Run
```
php FooSpace/usingFoo.php
php FooSpace/usingFooAndBar.php
php usingFooAndBar.php
```

## Stage 3 - Bespoke autoloading:

An autoloader can be used to generate the file path for each namespace specified with 'use'.

Adjust the usingFooAndBar.php file:
```
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
```

Run
```
php usingFooAndBar.php
```

## Stage 4 - Using the built in autoloader

There are built in autoloader functions in PHP, the most basic of which is spl_autoload. This takes a lowercase string of the namespace and classname, and requires the php file in the correct path. Magic!

Adjust the usingFooAndBar.php file:
```
<?php

use FooSpace\Foo as Foo;
use BarSpace\Bar as Bar;

spl_autoload('foospace\foo');
spl_autoload('barspace\bar');

$foo = new Foo();

$foo->hello();
$foo->showNamespace();


$bar = new Bar();

$bar->hello();
$bar->showNamespace();
```

Run
```
php usingFooAndBar.php
```
