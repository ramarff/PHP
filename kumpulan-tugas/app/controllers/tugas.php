<?php 
class Tugas extends Controller{
	public function index(){
		$data=["nama" => $nama, "pekerjaan" => $pekerjaan, "umur" => $umur,  "judul" => "Tugas PW"];
		$this->view("templates/header", $data);
		$this->view("templates/navbar-adminlte");
		$this->view("templates/sidebar-adminlte");
		$this->view("tugas/index");
		$this->view("templates/footer");
	}

	public function tugas1(){
		$data=["judul" => "Tugas 1"];
		$this->view("templates/header", $data);
		$this->view("templates/navbar-adminlte");
		$this->view("templates/sidebar-adminlte");
		$this->view("tugas/tugas1/arr_siswa");
		$this->view("templates/footer");
	}

	public function tugas2($tugas="form-belanja"){
		$data=["judul" => "Tugas 2"];
		switch($tugas){
			case "form-belanja":
				$this->view("templates/header", $data);
				$this->view("templates/navbar-adminlte");
				$this->view("templates/sidebar-adminlte");
				$this->view("tugas/tugas2/form_belanja");
				$this->view("templates/footer");
			 break;
			 case "form-nilai":
			 	$this->view("templates/header", $data);
				$this->view("templates/navbar-adminlte");
				$this->view("templates/sidebar-adminlte");
				$this->view("tugas/tugas2/form_nilai");
				$this->view("templates/footer");
			 break;
			 case "nilai-mahasiswa":
			 	$this->view("templates/header", $data);
				$this->view("templates/navbar-adminlte");
				$this->view("templates/sidebar-adminlte");
				$this->view("tugas/tugas2/nilai_mahasiswa");
				$this->view("templates/footer");
			 break;
		}
	}


	public function tugas3($tugas="nilai-mahasiswa"){
		$data=["judul" => "Tugas 3"];
		switch($tugas){
			case "footer":
				$this->view("templates/header", $data);
				$this->view("templates/navbar-adminlte");
				$this->view("templates/sidebar-adminlte");
				$this->view("tugas/tugas3/footer");
				$this->view("templates/footer");
			 break;
			 case "header":
			 	$this->view("templates/header", $data);
				$this->view("templates/navbar-adminlte");
				$this->view("templates/sidebar-adminlte");
				$this->view("tugas/tugas3/header");
				$this->view("templates/footer");
			 break;
			 case "home":
			 	$this->view("templates/header", $data);
				$this->view("templates/navbar-adminlte");
				$this->view("templates/sidebar-adminlte");
				$this->view("tugas/tugas3/home");
				$this->view("templates/footer");
			 break;
			 case "nilai-mahasiswa":
			 	$this->view("templates/header", $data);
				$this->view("templates/navbar-adminlte");
				$this->view("templates/sidebar-adminlte");
				$this->view("tugas/tugas3/nilai_mahasiswa");
				$this->view("templates/footer");
			 break;
			 case "footer":
			 	$this->view("templates/header", $data);
				$this->view("templates/navbar-adminlte");
				$this->view("templates/sidebar-adminlte");
				$this->view("tugas/tugas3/footer");
				$this->view("templates/footer");
			 break;
		}
	}

	public function tugas4(){
		$data=["judul" => "Page About"];
		$this->view("templates/header", $data);
		$this->view("about/page");
		$this->view("templates/footer");
	}


	public function tugas5(){
		$data=["judul" => "Page About"];
		$this->view("templates/header", $data);
		$this->view("about/page");
		$this->view("templates/footer");
	}
}
?>