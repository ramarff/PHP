<?php 
class Dispenser{
	protected $volume,
			  $harga,
			  $volumeGelas,
			  $namaMinuman;

	public function isi($vol){
		$this->volume=$vol;
	}
}

class Fruit{
	public $name;
	protected $color;
	private $weight;

	public function __construct($name, $color){
		$this->name=$name;
		$this->color=$color;
	}

	public function intro(){
		echo "The fruit is {$this->name} and the color is {$this->color}."."<br>";
	}
}

class Strawberry extends Fruit{
	public function message(){
		echo "Am I a Fruit or berry?";
	}
}
class Account{
	public $nomor;
	private $saldo;

	function __construct($no, $saldo){
		$this->nomor=$no;
		$this->saldo=$saldo;
	}

	public function deposit($uang){
		$this->saldo=$this->saldo+$uang;
	}

	public function withdraw($uang){
		$this->saldo=$this->saldo - $uang;
	}

	public function cetak(){
		echo "Nomor ".$this->nomor.", Saldonya:".$this->saldo."<br>";
	}
}

class BankAccount extends Account{
	// tambahkan data baru customer
	public $customer;

	public function __construct($no, $saldo_awal, $cust){
		// panggil constructor parent class
		parent::__construct($no, $saldo_awal);
		$this->customer=$cust;
	}

	public function cetak(){
		parent::cetak();
		echo ", Customer:".$this->customer;
	}

	public function transfer($obj_account, $uang){
		$obj_account->deposit($uang);
		$this->withdraw($uang);	
	}
}


trait ToolsWeb{
	public function cetakJudul($str){
		echo "<h2>$str</str>";
	}

	public function cetakFormatUang($uang){
		echo number_format($uang,0, ",",".");
	}
}

class Kasir{
	use ToolsWeb;

	public function cetak($customer, $uangbayar){
		$this->cetakJudul("Pelanggan ".$customer);
		$this->cetakFormatUang($uangbayar);
	}
}

	$kasir=new Kasir();
	$_customer="Rama Fajar Fadhillah ";
	$_uangbayar=1000000;
	$kasir->cetak($_customer, $_uangbayar);
// $mango=new Fruit("Mango","Orange");
// $mango->color="Orange"; //error
// $mango->weight="300"; //error

// $strawberry=new Strawberry("Strawberry","Red");
// $strawberry->message();
// $strawberry->intro();





// $acc1=new Account("020", 4000);
// $acc1->deposit(200);
// $acc1->cetak();

// $acc2=new Account("045", 2000);
// $acc2->withdraw(40);
// $acc2->cetak();


 ?>