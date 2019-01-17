<?php 

require_once 'App/init.php'; 

$produk1= new komik("Avatar", "Sindi Angraini", "Matahari", 150000, 100);


$produk2 = new Game("Free Fire", "Rico Ferdian", "Garena", 300000,50 );

$cetakProduk = new cetakinfoproduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

echo "<hr>";

new Coba();

 ?>