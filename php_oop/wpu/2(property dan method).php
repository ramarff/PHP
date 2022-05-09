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
 // 	return "Hello world";
 // }
 public function getLabel(){
 	return "$this->penulis, $this->penerbit";
 }
}
// $produk1=new Produk();
// $produk1->judul="Who am I";
// var_dump($produk1);

// $produk2=new Produk();
// $produk2->judul="IT";
// $produk2->tambahProperty="hahahah";
// var_dump($produk2)

$produk3=new Produk();
$produk3->judul="Naruto";
$produk3->penulis="Masashi Kisihmito";
$produk3->penerbit="Shonen Jump";
$produk3->harga=30000;
// echo $produk3->getLabel();	
// echo "<br>";
// echo "Komik:".$produk3->penulis." Penerbit:".$produk3->penerbit;

$produk4=new Produk();
$produk4->judul="Uncharted";
$produk4->penulis="Neil Druckman";
$produk4->penerbit="Sony Computer";
$produk4->harga=250000;
echo "Komik:".$produk3->getLabel();
echo "<br>";
echo "Game :".$produk4->getLabel();

?>
