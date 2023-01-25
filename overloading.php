<?php
abstract class ParentClass {
    protected $name, $value, $pricing;
    public function __construct($namee, $valuee, int $priciing)
    {
        # code...
        $this->name = $namee;
        $this->value = $valuee;
        $this->pricing = $priciing;
    }
    abstract public function exampleMethod();
    public function forMethod() {
        echo "This is an example method, named $this->name, valued $this->value, priced $this->pricing" . PHP_EOL;
    }
}

class ChildClass extends ParentClass {
    public $limit;
    public function __construct($namee, $valuee, int $priciing, $limit)
    {
        parent::__construct($namee, $valuee, $priciing);
        $this->limit = $limit;
    }
    public function exampleMethod() {
        parent::forMethod();
        echo "Limited $this->limit This is a good method" . PHP_EOL;
    }
}

class ChildKelaz extends ParentClass {
    public $Rating;
    public function __construct($namee, $valuee, int $priciing, $Rating)
    {
        parent::__construct($namee, $valuee, $priciing);
        $this->Rating = $Rating;
    }
    public function exampleMethod() {
        parent::forMethod();
        echo "Rated $this->Rating This is the best method" . PHP_EOL;
    }
}


$obj2 = new ChildClass("Arianna", 100, 20, 5);
$obj2->exampleMethod(); 
$obj3 = new ChildKelaz("Ashya", 1200, 20, 100);
$obj3->exampleMethod(); 

