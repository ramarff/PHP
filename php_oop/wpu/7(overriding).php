
<?php 
//Jualan Produk
//Komik
//Game
class Produk{
	 public $judul="judul",
	        $penulis="Rama Fajar",
	        $penerbit="INFORMATIKA",
	        $harga=0;
	 
	 // public function sayHello(){
	 //   return "Hello world";
	 // }
	 public function __construct($judul, $penulis, $penerbit, $harga){
	      $this->judul=$judul;
	      $this->penulis=$penulis;
	      $this->penerbit=$penerbit;
	      $this->harga=$harga;
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
	public $jmlHalaman;
        public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman){
           parent::__construct($judul, $penulis, $penerbit, $harga);
           $this->jmlHalaman=$jmlHalaman;
        }
		public function getInfoProduk(){
	     $str="Komik :".parent::getInfoProduk()."-{$this->jmlHalaman} Halaman";
	      return $str; 
		}
}
class Game extends Produk{
	public $wktMain;
	    public function __construct($judul, $penulis, $penerbit, $harga, $wktMain){
	      parent::__construct($judul, $penulis, $penerbit, $harga);
	      $this->wktMain=$wktMain;
	    }
		public function getInfoProduk(){
			$str="Game :".parent::getInfoProduk()."-{$this->wktMain} Jam";
			return $str;
		}
}
$komik=new  Komik("Naruto","Masashi Kishimoto","Shonen Jump", 30000, 100,"komik");
$game=new  Game("Uncharted","Neil Druckman","Sony Computer",250000, 50, "game");
echo $komik->getInfoProduk();
echo "<br>";
echo $game->getInfoProduk();
//Komik: Naruto | Masashi Kishimoto, Shonen Jump  (Rp.30000) - 100 Halaman
//Game : Uncharted | Neil Druckman, Sony Computer (Rp.250000);  ~ 50 Jam.
?>





