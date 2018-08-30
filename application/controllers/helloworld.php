<?php
class Helloworld extends CI_Controller {

 	public function index(){
		 $this->load->model('mymodel');
		 $data = $this->mymodel->GetMahasiswa('mahasiswa');
		 $data = array('data' => $data);
		 $this->load->view('data_mahasiswa', $data);
	}

	public function add_data(){ 
	     $this->load->view('form_add'); 
	     } 
	       public function insert(){ 
	            $this->load->model('mymodel'); 
	                 $data = array(
	                 				'no_induk' => $this->input->post('nama'), 
	                 				'nama' => $this->input->post('nama'), 
	                 				'alamat' => $this->input->post('alamat') 
	                 				);
	     $data = $this->mymodel->Insert('mahasiswa', $data); 
	     redirect(base_url(),'refresh');
	 }   

	 function hapus($noinduk){
	 	$noinduk = array('no_induk'=> $noinduk);
	 	$this->load->model('my model');
	 	$this->mymodel->Delete('mahasiswa', $noinduk);
	 	redirect(base_url(),'refresh');
	 }

	 function edit($noinduk){
	 	$this->load->model('mymodel');
	 	$siswa = $this->mymodel->GetWhere('mahasiswa', array('no_induk' => $noinduk));
	 	$data = array(
	 		'no_induk' => $siswa[0]['no_induk'],
	 		'nama' => $siswa[0]['nama'],
	 		'alamat' => $siswa[0]['alamat'],
	 		);
	 	$this->load->view('form_edit', $data);
	 }

	 function update_data(){
	 	$no_induk = $this->input->post('ni');
	 	$nama = $this->input->post('nama');
	 	$alamat = $this->input->post('alamat');

	 	if(isset($_POST['submit'])) {
	 		$data = [
	 					'nama' => $nama,
	 					'alamat' => $alamat
	 				];
	 		$this->db->where('no_induk',$no_induk);
	 		$this->db->update('mahasiswa',$data);
	 		redirect(base_url(),'refresh');
	 	}
	 }
}
?>