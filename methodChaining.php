<?php
class MyString {
    private $string;
    public function __construct($string) {
        $this->string = $string;
    }
    public function append($string) {
        $this->string .= $string;
        return $this;
    }
    public function prepend($string) {
        $this->string = $string . $this->string;
        return $this;
    }
    public function get() {
        return $this->string;
    }
}

$myString = new MyString("Hello");
$myString->append(" World")->prepend("Nice to meet you, ");
echo $myString->get();
