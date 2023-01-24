<?php
interface myFel{
    public function makan();
    public function warna($setWarna);
    public function setBerat($setBerat);
    public function getBerat();
}
interface isFel{
    public function minum();
}

abstract class yourFel {
    private $m, $n, $b;
    public $berat;
    public function dimakan()
    {
        // code
    }
    public function setBerat($setBerat){
        $this->berat = $setBerat;
    }
    public function getBerat(){
        $totalBerat = $this->berat;
        echo $totalBerat;
    }
}

class apel extends yourFel implements myFel,isFel{
    private $warna;
    public function makan()
    {
        // code
    }
    public function warna($setWarna)
    {
        $this->warna = $setWarna;
    }
    public function minum()
    {
        
    }
}

class zakar extends yourFel implements myFel{
    private $warna;
    public function makan()
    {
        // code
    }
    public function warna($setWarna)
    {
        $this->warna = $setWarna;
    }
}

$pj = new apel;
$pj->setBerat(40);
$pj->getBerat();
