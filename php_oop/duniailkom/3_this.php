<?php 
class laptop{

  public $pemilik, $merk;

  public function hidupkan_laptop(){
    return "Hidupkan laptop merk $this->merk punya $this->pemilik <br>";
  }

  public function matikan_laptop(){
    return "Matikan laptop merk $this->merk punya $this->pemilik <br>";
  }

  public function restart_laptop(){
    $matikan=$this->matikan_laptop();
    $hidupkan=$this->hidupkan_laptop();
    $restart=$matikan."<br>".$hidupkan;
    return $restart;
  }

}
// buat objek dari class laptop (instansiasi)
$laptop_rama=new laptop();

// isi property objek
$laptop_rama->pemilik="Rama Fajar Fadhillah";
$laptop_rama->merk="Hp";

echo $laptop_rama->hidupkan_laptop();
// hasil: "Hidupkan laptop Hp punya Rama Fajar Fadhillah"

echo"<br>";

echo $laptop_rama->restart_laptop();
// hasil
//"Hidupkan laptop Hp punya Rama Fajar Fadhillah"
//"Matikan laptop merk $this->merk punya $this->pemilik"
 ?>