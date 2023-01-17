<?php
// buat class untuk sebuah object
class myBook{
// attribute dari class myBook
    public $title = "Indonesian Book",
            $penulis = "kak setya",
            $penerbit = "intermedia",
            $hargaBeli = 50000,
            $jumlahHalaman = 100,
            $cover = "hardcover";
    
            public function beliBuku(){
                echo "Beli buku {$this->title} dari penulis {$this->penulis} dengan hargaBeli Rp.{$this->hargaBeli}" . PHP_EOL;
            }
}

// membuat object dari sebuah class
$buku1 = new myBook;
$buku1 -> title = "matematika";
$buku1 -> penulis = "azkiya";
$buku1 -> hargaBeli = 55000;
$buku1 -> cover = "papperback";
var_dump($buku1);
$buku1->beliBuku();

$buku2 = new myBook;
$buku2 -> title = "sains";
$buku2 -> penulis = "zafira";
$buku2 -> hargaBeli = 95000;
$buku2 -> jumlahHalaman = 300;
$buku2 -> cover = "softcover";
var_dump($buku2);
$buku2->beliBuku();

class myHouse{
// attribute dari class myHouse
    public $noRumah = 5,  
            $pintu = "6",
            $kandangKucing = true,
            $jumlahKucing = 5;

// attribute yang memiliki visibilitas tidak pubic
    private $jumlahOrang = 1;

    public function tambahKucing(int $tambahKucing){
        $totalKucing = $this->jumlahKucing + $tambahKucing;
        print "Jumlah Kucing di rumah no.{$this->noRumah} Adalah $totalKucing";

    }
}

$herHouse = new myHouse;
$herHouse -> jumlahKucing = 10;
$herHouse -> tambahKucing(1);
?>