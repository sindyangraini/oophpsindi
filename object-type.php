<?php 

// jualan prodk
// komik
// Game
class Produk {
	public $judul,
	 	   $penulis,
	 	   $penerbit,
	 	   $harga;
	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit ="penerbit", $harga = 0) { 
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;

	}

	public function getlabel() {
		return "$this->penulis, $this->penerbit";
	}
}


class cetakinfoproduk {
	public function cetak( Produk $produk) {
		$str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
		return $str;
	}
}


$produk1= new produk("Avatar", "Sindi Angraini", "Matahari", 150000);


$produk2 = new produk("Free Fire", "Rico Ferdian", "Garena", 300000);

$produk3 = new produk("Dragon Ball");

echo "komik :" . $produk1->getlabel();
echo "<br>";
echo "Game  :" . $produk2->getlabel();
echo "<br>";

$infoproduk1 = new cetakinfoproduk();
echo $infoproduk1->cetak($produk1);
 ?>