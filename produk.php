<?php 

// jualan prodk
// komik
// Game
class Produk {
	public $judul = "judul",
	 	   $penulis  = "penulis",
	 	   $penerbit = "penerbit",
	 	   $harga = 0 ;

	public function getlabel() {
		return "$this->penulis, $this->penerbit";
	}
}


$produk1= new produk();
$produk1->judul = "Avatar";
$produk1->penulis = "Sindi Angraini";
$produk1->penerbit = "Kiosashi";
$produk1->harga = 150000;

$produk2 = new produk();
$produk2->judul = "Free Fire";
$produk2->penulis = "Rico Ferdian";
$produk2->penerbit = "Garena";
$produk2->harga = 300000;

echo "komik :" . $produk1->getlabel();
echo "<br>";
echo "Game : " . $produk2->getlabel();
 ?>