<?php

class Game extends Produk implements Check{
    private $wktBermain;

    public function __construct($judul, $penulis, $penerbit, $harga, $wktBermain)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->wktBermain = $wktBermain;
    }

    public function getInfo() {
        
        $str = "{$this->judul} | {$this->getLabel()} - (Rp. $this->harga)";
        return $str;
    
    }

    public function getInfoProduk()
    {
        $str = "Game : " . $this->getInfo() . " ~ {$this->wktBermain} jam.";

        return $str;
    }
}