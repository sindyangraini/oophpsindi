<?php 


//require_once 'Produk/InfoProduk.phhp';
//require_once 'Produk/Produk.phhp';
//require_once 'Produk/Komik.phhp';
//require_once 'Produk/Game.phhp';
//require_once 'Produk/CetakInfoProduk.phhp';

spl_autoload_register(function( $class) {
	require_once __DIR__ . '/Produk/' . $class . '.php';
});

 ?>