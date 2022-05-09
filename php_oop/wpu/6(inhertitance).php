
<?php 
//Jualan Produk
//Komik
//Game
class Produk{
	 public $judul="judul",
	        $penulis="Rama Fajar",
	        $penerbit="INFORMATIKA",
	        $harga=0,
	        $jmlHalaman,
	        $wktMain;
	 
	 // public function sayHello(){
	 //   return "Hello world";
	 // }
	 public function __construct($judul, $penulis, $penerbit, $harga,$jmlHalaman, $wktMain){
	      $this->judul=$judul;
	      $this->penulis=$penulis;
	      $this->penerbit=$penerbit;
	      $this->harga=$harga;
	      $this->jmlHalaman=$jmlHalaman;
	      $this->wktMain=$wktMain;
	}
	 public function getLabel(){
	  return "$this->penulis, $this->penerbit";
	 }
	 public function getInfoProduk(){
	   $str="{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
	   return $str;
	 }
}
class CetakInfoProduk{
	  public function cetak(Produk $produk ){
	    $str="{$produk->judul} | {$produk->getLabel()}  (Rp.{$produk->harga})";
	      return $str;
	  }
}
class Komik extends Produk{
		public function getInfoProduk(){
	     $str="Komik :{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})-{$this->jmlHalaman} Halaman";
	      return $str; 
		}
}
class Game extends Produk{
		public function getInfoProduk(){
			$str="Game :{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})-{$this->wktMain} Jam";
			return $str;
		}
}
$komik=new  Komik("Naruto","Masashi Kishimoto","Shonen Jump", 30000, 100, 0, "komik");
$game=new  Game("Uncharted","Neil Druckman","Sony Computer",250000, 0, 50, "game");
echo $komik->getInfoProduk();
echo "<br>";
echo $game->getInfoProduk();
//Komik: Naruto | Masashi Kishimoto, Shonen Jump  (Rp.30000) - 100 Halaman
//Game : Uncharted | Neil Druckman, Sony Computer (Rp.250000);  ~ 50 Jam.
?>





