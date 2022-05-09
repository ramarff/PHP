<?php
class siswa{
  private $nama,
          $kelas,
          $jurusan,
          $nis,
          $email;
  public function __construct($nama, $kelas, $jurusan, $nis, $email){
       $this->nama=$nama;
       $this->kelas=$kelas;
       $this->jurusan=$jurusan;
       $this->nis=$nis;
       $this->email=$email;
  }
  public function umur(){
  	$u=$this->thnSkrng-$this->thnLahir;
    return $u;
  }
  public function getLabel(){
  	$str="Nama   :{$this->nama}<br>
  	      Kelas  :{$this->kelas}<br>
  	      Jurusan:{$this->jurusan}<br>
  	      Nis    :{$this->nis}<br>
  	      Email  :{$this->email}<br>";
  	return $str;
  }
}
/*class TampilNama{
	public function tmplNama($produk){
		$str="Nama:{$produk->nama}";
		return $str;
	}
}
*/
$afit=new Siswa("Afit Suradiradja","XI","Multimedia",13045,"afitsmith32@gmail.com");
$ahlandika=new Siswa("Ahlandika Wirasatria", "XI","Multimedia",13046,"ahlanwira45@gmail.com");
//$r=new TampilNama();
//echo $r->tmplNama($afit);
$arr=[$afit, $ahlandika];
foreach($arr as $r){
	echo $r->getLabel();
}
 ?>
