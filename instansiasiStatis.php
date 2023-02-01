<?php
class luv{
    public static function hi($name){
        echo "$name" . " ";
    }
    public static function greet($greet, $name){
        echo "Hi $greet" . " ";
        (new luv)->hi($name);
    }
    public static function completeGreet($name, $msg){
        echo "\n$msg" . static::greet("Assalamualaikum", $name);
    }
}
luv::completeGreet("Nofal", "How are you today?");
// Output : Hi Assalamualaikum Nofal
// How are you today?
?>