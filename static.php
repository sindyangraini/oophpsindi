<?php 

class contoh {
	public static $angka = 1;

	public function hallo() {
		return "Hallo" . self:: $angka++ . " kali . <br>";
	}
}
 

$obj = new contoh;
echo $obj->hallo();
echo $obj->hallo();
echo $obj->hallo();

echo"<hr>";

$obj2 = new contoh;
echo $obj->hallo();
echo $obj->hallo();
echo $obj->hallo();

 ?>