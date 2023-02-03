<?php
class BaseClass {
  final public function myMethod() {
    echo "This is a final method in BaseClass." . PHP_EOL;
  }
}

// class KidClass extends BaseClass {
//   // can't Attempt to override a final method
//   public function myMethod() {
//     echo "This is a method in KidClass." . PHP_EOL;
//   }
// }

// $object = new KidClass();
// $object->myMethod();
