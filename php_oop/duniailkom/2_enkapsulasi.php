<?php 
// buat class komputer
class komputer{
	// property dengan hak akses private
	private $jenis_processor="Intel Core i7-4790 3.6Ghz";

	public function tampilkan_processor() {
     return $this->jenis_processor;
   }
}



// buat class laptop
class laptop extends komputer{
	// buat public property 
	public $pemilik;
	// buat protected property
	protected $merk="Hp";

	// buat public method 
	public function hidupkan_laptop(){
		return " ...laptop hidup";
	}

	public function tampilkan_processor(){
		return $this->jenis_processor;
	}

	public function get_merk(){
		return $this->merk;
	}

	// buat protected method
	protected function matikan_laptop(){
		return " ...laptop mati";
	}
	public function paksa_mati(){
		return $this->matikan_laptop();
	}

}

// buat objek dari class laptop (instansiasi)
$laptop_rama=new laptop();

// set property
$laptop_rama->pemilik="Rama";
  
// tampilkan property
echo $laptop_rama->pemilik; // Rama
// echo $laptop_rama->merk; //error karena property hanya bisa diakses di dalam class (protected)


// tampilkan method
echo $laptop_rama->hidupkan_laptop()."<br>"; // "Hidupkan Laptop"
// echo $laptop_rama->matikan_laptop();  //error karena method hanya bisa diakses di dalam class (protected)

// tampilkan method dan property protected
echo "Laptop merk:".$laptop_rama->get_merk()."<br>";

echo $laptop_rama->paksa_mati();

// buat instansiasi kelas komputer dan laptop baru
$komputer=new komputer();
$laptop_baru=new laptop();

// akses property private
echo $komputer->tampilkan_processor();
echo $laptop_baru->tampilkan_processor(); //error
 ?>