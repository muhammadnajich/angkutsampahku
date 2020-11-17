<?php 
	/**
	 * 
	 */
	class C_Transaction extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('M_Data_Akun');
			$this->load->model('M_Data_Transaksi');
			$this->load->helper('url');
		}

		function index(){
		$data['akun'] = $this->M_Data_Akun->tampil_data()->result();
		$this->load->view('Back/V_Transaksi',$data);
		}

		function history(){
		$data['transaksi'] = $this->M_Data_Transaksi->tampil_data()->result();
		$this->load->view('Back/V_History',$data);
		}

		function tambah($id_user){
		$row = $this->M_Data_Akun->get_by_id($id_user);
        $data = array(
        	'id_user' => $row->id_user
        	);
		$this->load->view('Back/V_Tambah_Transaksi',$data);
		}


		function tambah_aksi(){
		$id_user = $this->input->post('id_user');
		$point = $this->input->post('tarik_point');
		$tanggal = date('y-m-d');
		$data = array(
			'id_user' => $id_user,
			'tarik_point' => $point,
			'tanggal' => $tanggal
			);
		$row = $this->M_Data_Akun->get_by_id($id_user);
        $data2 = array(
        	'point' => $row->point
        	);
        $total = $data2['point'] - $point;
        $data3 = array(
        	'point' => $total
        	);
        $where = array(
        	'id_user' => $row->id_user
        	);
        
        $this->M_Data_Akun->update_data($where,$data3,'akun');
		$this->M_Data_Transaksi->input_data($data,'transaksi');
		redirect('index.php/C_Transaction');
		}


	}
 ?>