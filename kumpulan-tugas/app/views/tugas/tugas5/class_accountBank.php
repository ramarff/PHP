<?php 
class Account{
	protected $nomorRekening, $saldo;

	function __construct($nomorRekening, $saldo){
		$this->nomorRekening=$nomorRekening;
		$this->saldo=$saldo;
	}
	protected deposit($jumlahUang){
		$this->saldo+$jumlahUang;
	}

	protected withdraw($jumlahUang){
		$this->saldo-$jumlahUang;
	}

	protected cetak(){	

	}
}

class AccountBank extends Account{
	public $costumer;

	function __construct($nomor, $saldo, $customer){
		parent::__construct($nomor, $saldoo, $customer);
		$this->costumer=$costumer;
	}
}

 ?>