<?php
final class hewan{
    protected $kaki = 4;

    public function getKaki(){
        # code...
        return $this-> kaki;
    }
}

// can not extend to hewan cuz hewan is final class
// class buaya extends hewan{
//     protected $kaki = 7;

// }

// $b = new buaya;
// echo $b -> getKaki();