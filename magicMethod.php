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
class Example {
    private $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function __sleep() {
        return array('data');
    }

    public function getData() {
        return $this->data;
    }
}

// Menciptakan object
$example = new Example(array(15, "nodg"));
$serializedData = serialize($example);
$example = unserialize($serializedData);

// Mendapatkan data dari object
$data = $example->getData();
print_r($data);


// Wakeup
class myWakeup {
    protected $data;
    public function __wakeup() {
    // This method is called when the object is unserialized
    $this->data = array('new_key' => 'new_value');
    echo "Waking up..." . PHP_EOL;
  }
}

$myObject = new myWakeup();
$serialized = serialize($myObject);
$myObject = unserialize($serialized);

// call
    class myCall {
    private function database(){
        echo "Selamat anda berhasil masuk" . PHP_EOL;
    }
    public function __call($name, $arguments)
    {
        if($name == 'database'){
            return $this->database();
        }
        else {
            throw new ParseError(sprintf("$name tidak valdi"));
        }
    }
}

$call = new myCall();
echo $call->database();

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
        return "Static Test Method called" . PHP_EOL;
    }
}

echo myCallStatic::call_static_testMethod();

// toString
class str{
    public function sayTo()
    {
        # code...
        $msg = "i really miss you";
        for (;;) {
            echo $msg . PHP_EOL;
        };
    }
    public function __toString()
    {
        return "i miss you" . PHP_EOL;
    }
}

echo $yourStr = new str;
echo $yourStr -> sayTo();
