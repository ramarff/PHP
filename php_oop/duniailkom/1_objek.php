<?php 
// buat class Laptop
class Laptop{
	// buat property untuk class laptop
	var $pemilik;
	var $merk;
	var $ukuran_layar;

	// buat method untuk class laptop
	function hidupkan_laptop(){
		return "... laptop hidup";
	}

	function matikan_laptop(){
		return "... latop mati";
	}


}
// buat objek dari class laptop (instansiasi)
$laptop_rama=new laptop();
$laptop_nisa=new laptop();

// set property
$laptop_rama->pemilik="Rama";
$laptop_rama->merk="Hp";
$laptop_rama->ukuran_layar="17 inch";

$laptop_nisa->pemilik="Manisa";
$laptop_nisa->merk="Asus";
$laptop_nisa->ukuran_layar="18 inch";

// tampilkan property
echo "Laptop ini milik ".$laptop_rama->pemilik." dengan merek ".$laptop_rama->merk." dan lebar layar ".$laptop_rama->ukuran_layar.". <br>";

echo "Laptop ini milik ".$laptop_nisa->pemilik." dengan merek ".$laptop_nisa->merk." dan lebar layar ".$laptop_nisa->ukuran_layar.". <br>";



echo $laptop_rama->hidupkan_laptop()."<br>";
echo $laptop_rama->matikan_laptop()."<br>";
 ?>