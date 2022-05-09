<?php 

class Buah{
 	var	$namaBuah;
 	var $warnaBuah;
 	var $beratBuah;

 	function __construct($namaBuah, $warnaBuah, $beratBuah){
 		$this->namaBuah=$namaBuah;
 		$this->warnaBuah=$warnaBuah;
 		$this->beratBuah=$beratBuah;
 	}

 	function cetakNamaBuah(){
 		return $this->namaBuah;
 	}
}

$semangka=new Buah("Semangka","Merah", 500);

echo $semangka->cetakNamaBuah();

































// class Matematika{
// 	// konstanta kelas
// 	// const PHI
// 	public static $counter=100;
// 	const PHI=3.14;

// 	public static function naikkanCounter(){
// 		self::$counter++;
// 	}

// 	public static function luasLingkaran($jari){
// 		$luas=self::PHI*$jari*$jari;
// 		return $luas;
// 	}
// }
// echo "Counter sebelumnya".Matematika::$counter;
// echo "<br>";
// Matematika::naikkanCounter();
// echo "Counter sekarang:".Matematika::$counter."<br>";
// echo "Nilai PHI".Matematika::PHI;


// $luasLingkaran=Matematika::luasLingkaran(8);
// echo "Luas lingkaran jari-jarinya 8=".$luasLingkaran;


 ?>