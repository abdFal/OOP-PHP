<?php

require_once "App/init.php";
use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;

$Manga = new Komik("Naruto Shippuden", "Masashi Kishimoto", "Shonen Jump", 50.000 ,10);
echo $Manga->getInfoProduk() . PHP_EOL;
$tensura = new Game("Isekai Memories", "Han", "Bandai Namco", 0, 24);
echo $tensura->getInfoProduk() . PHP_EOL;

new ProdukUser;
new ServiceUser;

$gamely = new game("aoaa",1,1,1,90);
echo $gamely -> getInfoProduk();