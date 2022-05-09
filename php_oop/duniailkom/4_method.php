<?php 
// buat class laptop
class laptop{
	// buat method
	public function hidupkan_laptop($pemilik="Rama", $merk="Machintos"){
		return "Hidupkan laptop $merk punya $pemilik";
	}


}
// buat objek dari class laptop (instansiasi)
$laptop_rama=new laptop();

echo $laptop_rama->hidupkan_laptop();
// hasil:"Hidupkan laptop Machinthos punya Rama" 

echo "<br>";

echo $laptop_rama->hidupkan_laptop("Fajar","Samsung");
// hasil:"Hidupkan laptop Samsung punya Fajar" 

 ?>