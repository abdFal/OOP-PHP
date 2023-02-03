<?php
class MyArray implements ArrayAccess {
    private $container = array();

    public function offsetSet($offset, $value) {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetExists($offset) {
        return isset($this->container[$offset]);
    }

    public function offsetUnset($offset) {
        unset($this->container[$offset]);
    }

    public function offsetGet($offset) {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
}

$myArray = new MyArray();
$myArray['key1'] = 'value1';
$myArray['key2'] = 'value2';

if (isset($myArray['key1'])) {
    echo "key1 exists with value: " . $myArray['key1'] . PHP_EOL;
}

unset($myArray['key1']);

if (!isset($myArray['key1'])) {
    echo "key1 has been removed" . PHP_EOL;
}

class ArrayAccessClass implements ArrayAccess
{
private $container;
public function offsetSet($offset, $value)
{ if (
is_null($offset)) {
$this->container[] = $value;
} else {
$this->container[$offset] = $value;
}}
public function offsetExists($offset)
{ return isset($this->container[$offset]);
}
public function offsetUnset($offset)
{
unset($this->container[$offset]);
}
public function offsetGet($offset)
{ return isset($this->container[$offset]) ?
$this->container[$offset] : null;
}}
$object = new ArrayAccessClass();
$object['name'] = 'Abdillah Naufal';
$object['address'] = 'In your memory';
var_dump($object);

$object1 = new ArrayAccessClass();
$object1['no'] = 192;
echo $object1['no'];