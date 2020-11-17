<?php 
	/**
	 * 
	 */
	class C_Tabung extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('M_Data_Tabung');
			$this->load->model('M_Data_Jenis');
			$this->load->helper('url');
		}

		function index(){
		$data['jenis'] = $this->M_Data_Jenis->tampil_data()->result();
		$this->load->view('Front/V_Tabung',$data);
		}

		function tambah(){
			$this->load->view('Back/V_Tabung');
		}

		function edit($id_jenis){
		 $row = $this->M_Data_Jenis->get_by_id($id_jenis);
        $data = array(
            'id_jenis' => $row->id_jenis,
            'jenis_sampah' => $row->jenis_sampah,
            'harga' => $row->harga
        );
		$this->load->view('Back/V_Edit_Jenis',$data);
	}

	public function tambah_aksi(){    
	  	$data = array();        
	  	$upload = $this->M_Data_Tabung->upload();            
	  	$this->M_Data_Tabung->save($upload);                
	}

		public function upload(){
 			
 			$file_tmp = $_FILES['gambar']['tmp_name'];	
			$gambar = $_FILES['gambar']['name'];
			$url = base_url();
			$folder = 'assets/images/';

            move_uploaded_file($file_tmp, $folder.$gambar);
			echo $file_tmp, $folder;
 
            	//tampung data dari form
				$id_jenis = $this->input->post('id_jenis');
		$berat = $this->input->post('berat');
		$alamat = $this->input->post('alamat');
		$id_user = $this->input->post('id_user');
		$tanggal = date('y-m-d');

		if($berat <= 10){
			redirect('index.php/C_Tabung');
		}else{

		$data = array(
			'id_user' => $id_user,
			'id_jenis' => $id_jenis,
			'berat' => $berat,
			'alamat' => $alamat,
			'gambar' => $gambar,
			'status' => 'Proses',
			'catatan' => 'Sedang Di Proses',
			'tanggal' => $tanggal
			);
		$this->M_Data_Tabung->input_data($data,'sampah');
		redirect('index.php/C_Home');
		}
       }

		function update(){
		$id = $this->input->post('id');
		$jenis_sampah = $this->input->post('jenis_sampah');
		$harga = $this->input->post('harga');
		$data = array(
			'jenis_sampah' => $jenis_sampah,
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