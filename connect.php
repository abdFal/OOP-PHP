<?php

class connect{
    protected $ip = "192.10.10";
    protected $post = 13;
    public static $Friends = 0;
    public function login($username, $fullName, $password,)
    {
        echo "Login success with username $username, and full name $fullName" .PHP_EOL;
    }
    public function addFriends(){
        ++self::$Friends;
        echo "You have " . static::$Friends ." Friends". PHP_EOL;
    }

}

$myAccount = new connect;
$myAccount-> login("fahiraaz44","Fahira Azkiya", 1234);
$myAccount-> addFriends();
$myAccount-> addFriends();
$myAccount-> addFriends();
echo "Your Friends Currently Are ". connect::$Friends . PHP_EOL ;

class circle{
    // non changable value
    const PI = 3.14;
    private $jari;

    public function countWide($jari){
        $luas = self::PI * $jari * $jari;
        return $luas . PHP_EOL;
    }

}
$circleOne = new circle;
echo $circleOne -> countWide(4);
?>