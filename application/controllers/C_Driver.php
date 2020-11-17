<?php 
	/**
	 * 
	 */
	class C_Driver extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('M_Data_Driver');
			$this->load->helper('url');
		}

		function index(){
		$data['driver'] = $this->M_Data_Driver->tampil_data()->result();
		$this->load->view('Back/V_Driver',$data);
		}

		function tambah(){
		$this->load->view('Back/V_Tambah_Driver');
		}

		function edit($id_driver){
		 $row = $this->M_Data_Driver->get_by_id($id_driver);
        $data = array(
            'id_driver' => $row->id_driver,
            'nik' => $row->nik,
            'nama' => $row->nama,
            'no_telepon' => $row->no_telepon,
            'status' => $row->status
        );
		$this->load->view('Back/V_Edit_Driver',$data);
	}

		function tambah_aksi(){
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$no_telepon = $this->input->post('no_telepon');
		$status = "Free";
		$data = array(
			'nik' => $nik,
			'nama' => $nama,
			'no_telepon' => $no_telepon,
			'status' => $status
			);
		$this->M_Data_Driver->input_data($data,'driver');
		redirect('index.php/C_Driver');
		}

		function update(){
		$id = $this->input->post('id');
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$no_telepon = $this->input->post('no_telepon');
		$status = "Free";
		$data = array(
			'nik' => $nik,
			'nama' => $nama,
			'no_telepon' => $no_telepon,
			'status' => $status
			);
		$where = array(
		'id_driver' => $id
		);
		$this->M_Data_Driver->update_data($where,$data,'driver');
		redirect('index.php/C_Driver');
		}

		function delete($id_driver){
		$where = array('id_driver' => $id_driver);
		$this->M_Data_Driver->hapus_data($where,'driver');
		redirect('index.php/C_Driver');
		}


	}
 ?>