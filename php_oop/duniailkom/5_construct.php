<?php 
class laptop{
	private $pemilik;
	private $merk;

	// constructor sebagai pembuat nilai awal
	public function __construct($pemilik, $merk){
		$this->pemilik=$pemilik;
		$this->merk=$merk;
	}

	public function hidupkan_laptop(){
		return "Hidupkan laptop $this->merk punya $this->pemilik";
	}

	public function __destruct(){
    	 echo " Ini berasal dari Destructor Laptop";
   }
}

// buat objek dari class laptop (instansiasi)
$laptop_rama=new laptop("Rama", "Acer");
$laptop_fajar=new laptop("Fajar","Samsung");

echo $laptop_rama->hidupkan_laptop();
echo"<br>";
echo $laptop_fajar->hidupkan_laptop();
unset($laptop_fajar);
echo $laptop_fajar->hidupkan_laptop(); //error karena objek sudah didestuctor atau dibershikan;

 ?>