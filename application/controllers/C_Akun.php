<?php 
	/**
	 * 
	 */
	class C_Akun extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('M_Data_Akun');
			$this->load->helper('url');
		}

		function index(){
		$data['akun'] = $this->M_Data_Akun->tampil_data()->result();
		$this->load->view('Back/V_Akun',$data);
		}

		function signup(){
			$this->load->view("Front/V_Signup");
		}

		function tambah(){
		$this->load->view('Back/V_Tambah_Akun');
		}

		function edit($id_user){
		 $row = $this->M_Data_Akun->get_by_id($id_user);
        $data = array(
            'id_user' => $row->id_user,
            'username' => $row->username,
            'password' => $row->password,
            'hak_akses' => $row->hak_akses
        );
		$this->load->view('Back/V_Edit_Akun',$data);
	}

		function tambah_aksi(){
		$name = $this->input->post('name');
		$provinsi = $this->input->post('provinsi');
		$kota = $this->input->post('kota');
		$kabupaten = $this->input->post('kabupaten');
		$kecamatan = $this->input->post('kecamatan');
		$jalan = $this->input->post('jalan');
		$rt = $this->input->post('rt');
		$rw = $this->input->post('rw');
		$kodepos = $this->input->post('kodepos');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$hak_akses = "user";
		$data = array(
			'name' => $name,
			'provinsi' => $provinsi,
			'kota' => $kota,
			'kabupaten' => $kabupaten,
			'kecamatan' => $kecamatan,
			'jalan' => $jalan,
			'rt' => $rt,
			'rw' => $rw,
			'kodepos' => $kodepos,
			'email' => $email,
			'username' => $username,
			'password' => $password,
			'hak_akses' => $hak_akses
			);
		$this->M_Data_Akun->input_data($data,'akun');
		redirect('index.php/C_Login');
		}

		function update(){
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$hak_akses = $this->input->post('hak_akses');
		$data = array(
			'username' => $username,
			'password' => $password,
			'hak_akses' => $hak_akses
			);
		$where = array(
		'id_user' => $id
		);
		$this->M_Data_Akun->update_data($where,$data,'akun');
		redirect('index.php/C_Akun');
		}

		function delete($id_user){
		$where = array('id_user' => $id_user);
		$this->M_Data_Akun->hapus_data($where,'akun');
		redirect('index.php/C_Akun');
		}


	}
 ?>