<?php 	
class Dispenser{
	protected $volume, $hargaGelas;
	protected $hargaSegelas;
	private $volumeGelas;
	public $namaMinuman, $dompet;

	public function __construct($volume, $namaMinuman, $harga){
		$this->volume=$volume;
		$this->namaMinuman=$namaMinuman;
		$this->hargaSegelas=$harga;
		$this->dompet;
	}
	public function isi_galon($vol){
		$this->volume=$vol;
	}

	public function info_minuman(){
		echo"============================"."<br>";
		echo "Nama Minuman:".$this->namaMinuman."<br>";
		echo "Volume:".$this->volume."<br>";
		echo "Harga segelas:".$this->hargaSegelas."<br>";
		echo "Hasil pendapatan:".$this->dompet."<br>";
		echo"============================"."<br>";
	}

	public function beli_air($volumeGelas, $uang){

		if ($uang < $this->hargaSegelas){
			echo "Maaf uang anda tidak cukup";
		}elseif($uang > $this->hargaSegelas && $volume >= $volumeGelas){
			$this->volume-=$volumeGelas;
			$this->dompet += $uang;
		}elseif ($this->volume < 0){
			echo "Maaf air sudah habis";
		}
	}

}

$aqua=new Dispenser(800, "Aqua", 5000);
$aqua->info_minuman();
$aqua->beli_air(200, 5000);
$aqua->info_minuman();
$aqua->info_minuman();



 ?>