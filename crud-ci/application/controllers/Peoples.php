<?php 	
class Peoples extends CI_Controller{
	public function index(){
		// panggil model Peoples lalu namanya diganti menjadi peoples
		$this->load->model("Peoples_model","peoples");

		// buat array data
		$data=["judul"=>"List of peoples", "peoples" => $this->peoples->getAllPeoples()];


		// ambil data keyword
		if($this->input->post("submit")){
			$data["keyword"]=$this->input->post("keyword");
			$this->session->set_userdata("keyword", $data["keyword"]);
		}else{
			$data["keyword"]=$this->session->userdata("keyword");
		}

		//config
		$this->db->like("name", $data["keyword"]);
		$this->db->or_like("email", $data["keyword"]);
		$this->db->from("Peoples");

		$config["total_rows"]=$this->db->count_all_results();
		$data["total_rows"]=$config["total_rows"];
		$config["per_page"]=8;


		// load library
		$this->load->library("pagination");
		

		// initialize
		$this->pagination->initialize($config);
		$data["start"]=$this->uri->segment(3);
		$data["peoples"]=$this->peoples->getPeoples($config["per_page"], $data["start"],$data["keyword"]);

		$this->load->view("templates/header", $data);
		$this->load->view("peoples/index", $data);
		$this->load->view("templates/footer");
	}
}


 ?>