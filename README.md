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
include 'BarSpace/Bar.php';

$foo = new Foo();

$foo->hello();

$bar = new BarSpace\Bar();

$bar->hello();
```

Run
```
php FooSpace/usingFoo.php
```
