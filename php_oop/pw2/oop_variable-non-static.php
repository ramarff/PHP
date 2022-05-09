<?php 
class NilaiSiswa
{
	public  $nama;
	public $nilai;
	public $sekolah="SDIT NF";

	public function getHasil(){
		if ($this->nilai > 55) return "Lulus";
		else return "Tidak Lulus";
	}
}
$ns1=new NilaiSiswa();
$ns1->nama="Rama Fajar Fadhillah";
$ns1->nilai=90;
echo $ns1->nama." Sekolah di ".$ns1->sekolah;
	

 ?>