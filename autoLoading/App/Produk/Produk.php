<?php
declare(strict_types=1);
abstract class Produk{
    protected $judul, $penulis, $penerbit;
    protected int $harga;

    public function __construct(?string $judul = "judul", ?string $penulis = "penulis", ?string $penerbit = "penerbit", ?int $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = (int)$harga;
    }

    public function getLabel() 
    {
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getInfo();
}
