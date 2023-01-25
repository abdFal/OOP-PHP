<?php
class exam{
    private $mtk, $indo, $pjok;
    const A = 90,B = 80,C = 70;
    function __construct($mtk, $indo, $pjok)
    {
        $this->mtk = $mtk;
        $this->indo = $indo;
        $this->pjok = $pjok;
    }
    function getRating($name){
        if ($this -> mtk >= self::A){
        $predikatMtk = "A";
    }
        else if ($this -> mtk >= self::B){
        $predikatMtk = "B";
    }
        else if ($this -> mtk >= self::C){
        $predikatMtk = "C";
    }
        else{
        $predikatMtk = "";
    }
        if ($this -> indo >= self::A){
        $predikatIndo = "A";
    }
        else if ($this -> indo >= self::B){
        $predikatIndo = "B";
    }
        else if ($this -> indo >= self::C){
        $predikatIndo = "C";
    }
        else{
        $predikatIndo = "";
    }
        if ($this -> pjok >= self::A){
        $predikatPjok = "A";
    }
        else if ($this -> pjok >= self::B){
        $predikatPjok = "B";
    }
        else if ($this -> pjok >= self::C){
        $predikatPjok = "C";
    }
        else{
        $predikatPjok = "";
    }
        echo "Nilai mtk $name adalah $this->mtk dengan predikat $predikatMtk indo $this->indo dengan predikat $predikatIndo pjok $this->pjok dengan perdikat $predikatPjok ";
    }
}

$dadank = new exam(85,90,90);
$dadank -> getRating("Dadank");