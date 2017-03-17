# PHP namespaces

Learning how to set up and use PHP namespaces.

##Stage 1; basic set up and usage:

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

##Stage 2; Getting to understand namespace interactions:

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
