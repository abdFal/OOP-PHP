<?php

interface cek
{
    public function getInfoProduk();
}

abstract class produk {
    
    protected $judul, $penulis, $penerbit, $harga;
    
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() 
    {
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getInfo();
    
}

class komik extends produk implements cek{

    private $jmlHalaman;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfo() {
        
        $str = "{$this->judul} | {$this->getLabel()} - (Rp. $this->harga)";
        return $str;
    
    }

    public function getInfoProduk()
    {
        $str = "Komik : " . $this->getInfo() . " ~ {$this->jmlHalaman} Halaman";

        return $str;
    }
}

$Manga = new komik("Naruto Shippuden", "Masashi Kishimoto", "Shonen Jump", 50.000 ,10);
echo $Manga->getInfoProduk() . PHP_EOL;

class game extends produk implements cek{
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

$tensura = new game("Isekai Memories", "Han", "Bandai Namco", 0, 24);
echo $tensura->getInfoProduk() . PHP_EOL;