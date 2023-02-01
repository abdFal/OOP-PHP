<?php
// set
class mySet {
    private $name,$age;

    public function __set($property, $value) {
        if ('age' == $property){
            $this->age = $value;
            echo $this->age . PHP_EOL;
        }
        elseif ('name' == $property){
            $this->name = $value;
            echo $this->name . PHP_EOL;
        }
        else{
            throw new ParseError(sprintf('Undefined Property'));
        }
    }
}
$testSet = new mySet;
$testSet->age = 9;
$testSet->name = 'Nofal';

// get
class myGet {
    private $data = array();

    public function __get($property) {
        if (array_key_exists($property, $this->data)) {
            return $this->data[$property];
        }
    }
}

// unset
class myUnset {
    private $data = array();

    public function __unset($property) {
        unset($this->data[$property]);
    }
}

// isset
class myIsset {
    private $data = array();

    public function __isset($property) {
        return isset($this->data[$property]);
    }
}

// sleep
class mySleep {
    private $data = array();

    public function __sleep() {
        return array('data');
    }
}

// wakeup
class myWakeup {
    public function __wakeup() {
        // wakeup code
    }
}

// call
class myCall {
    private $prefix = 'call_';

    public function __call($method, $arguments) {
        if (strpos($method, $this->prefix) === 0) {
            $actualMethod = substr($method, strlen($this->prefix));
            if (method_exists($this, $actualMethod)) {
                return call_user_func_array([$this, $actualMethod], $arguments);
            }
        }
        throw new BadMethodCallException("Method {$method} does not exist");
    }

    private function testMethod() {
        return "Test Method called" . PHP_EOL;
    }
}

$call = new myCall();
echo $call->call_testMethod();

// call static
class myCallStatic {
    private static $prefix = 'call_static_';

    public static function __callStatic($method, $arguments) {
        if (strpos($method, self::$prefix) === 0) {
            $actualMethod = substr($method, strlen(self::$prefix));
            if (method_exists(__CLASS__, $actualMethod)) {
                return call_user_func_array([__CLASS__, $actualMethod], $arguments);
            }
        }
        throw new BadMethodCallException("Static Method {$method} does not exist");
    }

    private static function testMethod() {
        return "Static Test Method called";
    }
}

echo myCallStatic::call_static_testMethod();

