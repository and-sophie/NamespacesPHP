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
