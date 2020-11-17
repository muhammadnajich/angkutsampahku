<?php 
	/**
	 * 
	 */
	class C_Jenis extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('M_Data_Jenis');
			$this->load->helper('url');
		}

		function index(){
		$data['jenis'] = $this->M_Data_Jenis->tampil_data()->result();
		$this->load->view('Back/V_Jenis',$data);
		}

		function tambah(){
		$this->load->view('Back/V_Tambah_Jenis');
		}

		function edit($id_jenis){
		 $row = $this->M_Data_Jenis->get_by_id($id_jenis);
        $data = array(
            'id_jenis' => $row->id_jenis,
            'jenis_sampah' => $row->jenis_sampah,
            'kode' => $row->kode,
            'deskripsi' => $row->deskripsi,
            'harga' => $row->harga
        );
		$this->load->view('Back/V_Edit_Jenis',$data);
	}

		function tambah_aksi(){
		$jenis_sampah = $this->input->post('jenis_sampah');
		$kode = $this->input->post('kode');
		$deskripsi = $this->input->post('deskripsi');
		$harga = $this->input->post('harga');
		$data = array(
			'jenis_sampah' => $jenis_sampah,
			'kode' => $kode,
			'deskripsi' => $deskripsi,
			'harga' => $harga
			);
		$this->M_Data_Jenis->input_data($data,'jenis_sampah');
		redirect('index.php/C_Jenis');
		}

		function update(){
		$id = $this->input->post('id');
		$jenis_sampah = $this->input->post('jenis_sampah');
		$kode = $this->input->post('kode');
		$deskripsi = $this->input->post('deskripsi');
		$harga = $this->input->post('harga');
		$data = array(
			'jenis_sampah' => $jenis_sampah,
			'kode' => $kode,
			'deskripsi' => $deskripsi,
			'harga' => $harga
			);
		$where = array(
		'id_jenis' => $id
		);
		$this->M_Data_Jenis->update_data($where,$data,'jenis_sampah');
		redirect('index.php/C_Jenis');
		}

		function delete($id_jenis){
		$where = array('id_jenis' => $id_jenis);
		$this->M_Data_Jenis->hapus_data($where,'jenis_sampah');
		redirect('index.php/C_Jenis');
		}


	}
 ?>