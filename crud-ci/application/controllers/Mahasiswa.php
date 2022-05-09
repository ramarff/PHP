<?php 
class Mahasiswa extends CI_Controller{
	public function __construct(){
		parent::__construct();
		// $this->load->database();
		$this->load->model("Mahasiswa_model");
		$this->load->library("form_validation");
	}

	public function index(){
		$data=["judul"=>"Daftar Mahasiswa", "mahasiswa" => $this->Mahasiswa_model->getAllMahasiswa()];
		if($this->input->post("keyword")){
			$data["mahasiswa"]=$this->Mahasiswa_model->cariDataMahasiswa();	
		}
		$this->load->view("templates/header", $data);
		$this->load->view("mahasiswa/index", $data);
		$this->load->view("templates/footer");
	}

	public function tambah(){
		$data=["judul" => "Form Tambah Data Mahasiswa"];

		$this->form_validation->set_rules("nama","Nama","required");
		$this->form_validation->set_rules("nim","NIM","required|numeric");
		$this->form_validation->set_rules("email","email","required|valid_email");
		$this->form_validation->set_rules("jurusan","jurusan","required");
		
		if(isset($_POST["cancel"])){
			redirect("mahasiswa");
		}
		elseif($this->form_validation->run() == FALSE){
				$this->load->view("templates/header", $data);
				$this->load->view("mahasiswa/tambah");
				$this->load->view("templates/footer");
		}else{
			$this->Mahasiswa_model->tambahDataMahasiswa();
			$this->session->set_flashdata("flash","Ditambahkan");
			redirect("mahasiswa");
		}
	
	}

	public function edit($id){
		$data=["judul" => "Form Ubah Data Mahasiswa", "mahasiswa" => $this->Mahasiswa_model->getMahasiswaById($id), "jurusan" => ["Teknik Informatika","Sistem Informasi","Bisnis Digital","Teknik Industri","Teknik Elektro"]];

		$this->form_validation->set_rules("nama","Nama","required");
		$this->form_validation->set_rules("nim","NIM","required|numeric");
		$this->form_validation->set_rules("email","email","required|valid_email");
		$this->form_validation->set_rules("jurusan","jurusan","required");
		
		if(isset($_POST["cancel"])){
			redirect("mahasiswa");
		}
		elseif($this->form_validation->run() == FALSE){
				$this->load->view("templates/header", $data);
				$this->load->view("mahasiswa/edit", $data);
				$this->load->view("templates/footer");
		}else{
			$this->Mahasiswa_model->editDataMahasiswa();
			$this->session->set_flashdata("flash","Diubah");
			redirect("mahasiswa");
		}
	
	}

	public function hapus($id){
		$this->Mahasiswa_model->hapusDataMahasiswa($id);
		$this->session->set_flashdata("flash", "Dihapus");
		redirect("mahasiswa");

	}

	public function detail($id){
		$data=["judul"=>"Detail Data Mahasiswa", "mahasiswa" => $this->Mahasiswa_model->getMahasiswaById($id)];
		$this->load->view("templates/header", $data);
		$this->load->view("mahasiswa/detail", $data);
		$this->load->view("templates/footer");

	}
}


 ?>