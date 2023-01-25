<?php
interface myFel{
    public function makan();
    public function warna($setWarna);
    public function setBerat(int $setBerat);
    public function getBerat();
}
interface isFel{
    public function minum();
}

abstract class yourFel {
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
        echo "Apel langsung dimakan" . PHP_EOL;
    }
    public function warna($setWarna)
    {
        $myWarna = $this->warna = $setWarna;
        echo $myWarna, PHP_EOL;
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
$pj->warna("Merah");
$pj->makan();
$pj->getBerat();
