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
        $wktMain,
        $tipe;
 
 // public function sayHello(){
 //   return "Hello world";
 // }
 public function __construct($judul, $penulis, $penerbit, $harga,$jmlHalaman, $wktMain, $tipe){
      $this->judul=$judul;
      $this->penulis=$penulis;
      $this->penerbit=$penerbit;
      $this->harga=$harga;
      $this->jmlHalaman=$jmlHalaman;
      $this->wktMain=$wktMain;
      $this->tipe=$tipe;
 }
 public function getLabel(){
  return "$this->penulis, $this->penerbit";
 }
 public function getInfoLengkap(){
   $str="{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
   if($this->tipe == "komik"){
    $str.="- {$this->jmlHalaman} Halaman";
   }else if($this->tipe == "game"){
     $str.="~ {$this->wktMain}  Jam";
   }
   return $str;
 }
}
class CetakInfoProduk{
  public function cetak(Produk $produk ){
    $str="{$produk->judul} | {$produk->getLabel()}  (Rp.{$produk->harga})";
      return $str;
  }
}
$produk1=new Produk("Naruto","Masashi Kishimoto","Shonen Jump", 30000, 100, 0, "komik");
$produk2=new Produk("Uncharted","Neil Druckman","Sony Computer",250000, 0, 50, "game");
echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
//Komik: Naruto | Masashi Kishimoto, Shonen Jump  (Rp.30000) - 100 Halaman
//Game : Uncharted | Neil Druckman, Sony Computer (Rp.250000);  ~ 50 Jam.
?>





