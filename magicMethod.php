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
$testSet->age = 15;
$testSet->name = 'Nofal';

// get
class myGet {
    private $data = array();
    public function __construct(...$data)
    {   
        $this->data = $data;
    }
    public function __get($property) {
        if ($property !== null) {
            return $this->$property;
        }
        else {
            throw new ParseError(sprintf("error parse"));
        }
    }
}
$testGet = new myGet(null);
try {
    echo implode(", ", $testGet->data);
} catch (ParseError $e) {
    echo $e->getMessage();
}

// unset
class myUnset {
    private $data = [
        'name' => "nofal",
        'id' => "10"
    ];

    public function __unset($property)
    {
        if(isset ($this->data[$property])){
            unset ($this->data["name"]);
        }
    }
}
$myObj = new myUnset;
var_dump($myObj);

// isset
class myIsset{
    private $name;
        public function __isset($property)
            { if ('name' === $property) {
            return true;}
    }
}
$magic = new myIsset();
// var_dump(isset($magic->name));

// sleep
// Define a class named mySleep
class mySleep {
  // Define a private property named $data
  private $data = array();

  // Define a magic method named __sleep
  public function __sleep() {
    // This method returns the name of the property to be serialized
    return array('data');
  }
}

// Define a class named myWakeup
class myWakeup {
  // Define a magic method named __wakeup
  public function __wakeup() {
    // This method is called when the object is unserialized
    echo "Waking up...";
  }
}

// Create an instance of the mySleep class
$obj = new mySleep();

// Serialize the object
$serialized = serialize($obj);

// Unserialize the serialized data
$unserialized = unserialize($serialized);

// The __wakeup method is automatically called when unserializing

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

