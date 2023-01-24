<?php

// class Mobil {
//     private $jenis;
//     public function setJenisMobil($jenisMobil)
//     {
//         # code...
//         $this->jenis = $jenisMobil;
//     }
    
//     public function getJenisMobil()
//     {
//         # code...
//         return $this->jenis;
//     }

// }
// class mobilClassic extends Mobil{

// }

// $myMobil = new Mobil;
// $myMobil -> setJenisMobil("Sport");
// $yourMobil = new mobilClassic;
// $yourMobil -> setJenisMobil("Sedan");
// echo $yourMobil -> getJenisMobil();

class Animal {
    private $name, $color;

    public function __construct($name, $color)
    {
        $this -> name = $name;
        $this -> color = $color;
    }
    public function describe() {
        return "This animal is a $this->name and it's color is $this->color." . PHP_EOL;
    }
}

class Dog extends Animal {
    public function bark() {
        return "Woof woof!" . PHP_EOL;
    }
}

$dog = new Dog("dog", "brown");


echo $dog->describe(); // Output: "This animal is a dog and its color is brown."
echo $dog->bark(); // Output: "Woof woof!"

$numbers = range(1, 10);
shuffle($numbers);
foreach ($numbers as $number) {
    echo "$number ";
}

class kelaz{
    private $students, $tv, $meja, $kursi, $papanTulis;
    public $kelazName;
    public function __construct($kelaz)
    {
        $this->kelazName = $kelaz;
    }
    public function setProfileKelaz($students, $tv, $meja, $kursi, $papanTulis)
    {
        // code...
        $this -> students = $students;
        $this -> tv = $tv;
        $this -> meja = $meja;
        $this -> kursi = $kursi;
        $this -> papanTulis = $papanTulis;
    }
    public function getProfileKelaz()
    {
        // code...
        return "Ini adalah kelaz $this->kelazName, disini ada $this->students manusia, ada $this->tv tv, $this->meja meja, $this->kursi kursi, dan $this->papanTulis papan tulis" . PHP_EOL;
    }
}

class smp extends kelaz{
    public function setDataSmp($students, $tv, $meja, $kursi, $papanTulis)
    {
        # code...
        parent::setProfileKelaz($students, $tv, $meja, $kursi, $papanTulis);
    }
}

class smk extends kelaz{
    public function profileKelaz()
    {
        # code...
        $n = parent ::getProfileKelaz();
            return $n . "dan $this->kelazName adalah kelas paling buruk" . PHP_EOL;
    }
}

$xrpl = new smk("sepuluh rpl");
$xrpl -> setProfileKelaz(16,1,3,18,2);
echo $xrpl -> getProfileKelaz();

$xtkj = new smk ("sepuluh tkj");
$xtkj -> setProfileKelaz(14,1,3,18,2);
echo $xtkj -> profileKelaz();

$ixsmp = new smp("9");
$ixsmp -> setDataSmp(10,1,3,10,3);
echo $ixsmp -> getProfileKelaz();
