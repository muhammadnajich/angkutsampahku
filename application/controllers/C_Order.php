<?php 
	/**
	 * 
	 */
	class C_Order extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('M_Data_Order');
			$this->load->model('M_Data_Jenis');
			$this->load->model('M_Data_Akun');
            $this->load->model('M_Data_Driver');
			$this->load->helper('url');
		}

		function index(){
		$data['order'] = $this->M_Data_Order->tampil_data()->result();
		$this->load->view('Back/V_Request',$data);
		}

		function canceled(){
		$data['cancel'] = $this->M_Data_Order->cancel_data()->result();
		$this->load->view('Back/V_Canceled',$data);
		}

		function accepted(){
		$data['accept'] = $this->M_Data_Order->accept_data()->result();
		$this->load->view('Back/V_Accepted',$data);
		}

		function terima(){
		$id_driver = $this->input->post('id_driver');
		$id_sampah = $this->input->post('id_sampah');
		$tanggal = $this->input->post('tanggal');
		$data = array(
			'status' => "Diterima",
			'id_driver' => $id_driver
			);
		$where = array(
		'id_sampah' => $id_sampah
		);
		$this->M_Data_Order->update_data($where,$data,'sampah');
		$data2 = array('status' => "Pick Up");
		$where2 = array('id_driver' => $id_driver);
		$this->M_Data_Order->update_data($where2,$data2,'driver');

		$from_email = "jorgifatwaambia@gmail.com"; 
        $to_email = $this->input->post('email'); 

         $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => $from_email,
                'smtp_pass' => 'rosita1212',
                'mailtype'  => 'html', 
                'charset'   => 'iso-8859-1'
        );

            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");   

         $this->email->from($from_email, 'Admin Angkut Sampahku'); 
         $this->email->to($to_email);
         $this->email->subject('Pengajuan Diterima'); 
         $this->email->message('Pengajuan anda pada tanggal'.$tanggal.' Diterima'); 

         //Send mail 
         if($this->email->send()){
                $this->session->set_flashdata("notif","Email berhasil terkirim."); 
         }else {
                $this->session->set_flashdata("notif","Email gagal dikirim."); 
                redirect('index.php/C_Order'); 
         } 

		redirect('index.php/C_Order');
		}

		function selesai($id){
		$row = $this->M_Data_Order->get_by_id($id);
        $data = array(
            'id_sampah' => $row->id_sampah,
            'id_jenis'  => $row->id_jenis,
            'id_user'  => $row->id_user,
            'id_driver'  => $row->id_driver,
            'berat' => $row->berat
        	);	
        $row2 = $this->M_Data_Jenis->get_by_id($data['id_jenis']);
        $data2 = array(
        	'harga' => $row2->harga
        	);
        $row3 = $this->M_Data_Akun->get_by_id($data['id_user']);
        $data3 = array(
        	'point' => $row3->point,
            'email' => $row3->email
        	);
        $total = $data['berat'] * $data2['harga'];
        $point = ($total / 1000) + $data3['point'];
        $data4 = array('point' => $point);
        $where = array('id_user' => $data['id_user']);
        $this->M_Data_Akun->update_data($where,$data4,'akun');
        $data5 = array('status' => 'Free');
        $where2 = array('id_driver' => $data['id_driver']);
        $this->M_Data_Driver->update_data($where2,$data5,'driver');
        $data6 = array('status' => 'Selesai');
        $where3 = array('id_sampah' => $id);
        $this->M_Data_Order->update_data($where3,$data6,'sampah');

        $from_email = "jorgifatwaambia@gmail.com"; 
        $to_email = $data3['email']; 

         $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => $from_email,
                'smtp_pass' => 'rosita1212',
                'mailtype'  => 'html', 
                'charset'   => 'iso-8859-1'
        );

            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");   

         $this->email->from($from_email, 'Admin Angkut Sampahku'); 
         $this->email->to($to_email);
         $this->email->subject('Pengajuan Selesai'); 
         $this->email->message('Selamat! anda pada tanggal'.$tanggal.' telah selesai. Anda mendapatkan point sebesar'.$total); 

         //Send mail 
         if($this->email->send()){
                $this->session->set_flashdata("notif","Email berhasil terkirim."); 
                redirect('index.php/C_Order/Accepted');
         }else {
                $this->session->set_flashdata("notif","Email gagal dikirim."); 
                redirect('index.php/C_Order'); 
         } 

        $this->load->view('Back/C_Order/Accepted');
		}

		function penerimaan($id){
		$row = $this->M_Data_Order->get_by_id($id);
        $data = array(
            'id_sampah' => $row->id_sampah,
            'id_user' => $row->id_user
        );

        $row2 = $this->M_Data_Akun->get_by_id($data['id_user']);

        $data = array(
            'email' => $row2->email
        );
        $where = array('id_sampah' => $id);
		$data['sampah'] = $this->M_Data_Order->tampil($where,'sampah')->result();
        $data['driver'] = $this->M_Data_Order->pilih_data()->result();
		$this->load->view('Back/V_Penerimaan',$data);
		} 

		function penolakan(){
		$id = $this->input->post('id_sampah');
		$catatan = $this->input->post('catatan');
		$tanggal = $this->input->post('tanggal');
		$data = array(
			'catatan' => $catatan,
			'status' => "Ditolak"
			);
		$where = array(
		'id_sampah' => $id
		);
		$this->M_Data_Order->update_data($where,$data,'sampah');
		
		$from_email = "jorgifatwaambia@gmail.com"; 
        $to_email = $this->input->post('email'); 

         $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => $from_email,
                'smtp_pass' => 'rosita1212',
                'mailtype'  => 'html', 
                'charset'   => 'iso-8859-1'
        );

            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");   

         $this->email->from($from_email, 'Admin Angkut Sampahku'); 
         $this->email->to($to_email);
         $this->email->subject('Pengajuan Ditolak'); 
         $this->email->message('Pengajuan anda pada tanggal'.$tanggal.' Ditolak. Karena'.$catatan); 

         //Send mail 
         if($this->email->send()){
                $this->session->set_flashdata("notif","Email berhasil terkirim."); 
         }else {
                $this->session->set_flashdata("notif","Email gagal dikirim."); 
                redirect('index.php/C_Order'); 
         } 

		redirect('index.php/C_Order');
		}

		function tolak($id){
		$row = $this->M_Data_Order->get_by_id($id);
        $data = array(
            'id_sampah' => $row->id_sampah,
            'id_user' => $row->id_user
        );

        $row2 = $this->M_Data_Akun->get_by_id($data['id_user']);

        $data = array(
            'email' => $row2->email
        );
        $where = array('id_sampah' => $id);
		$data['sampah'] = $this->M_Data_Order->tampil($where,'sampah')->result();
		$this->load->view('Back/V_Tolak',$data);
		}

		function delete($id_jenis){
		$where = array('id_jenis' => $id_jenis);
		$this->M_Data_Jenis->hapus_data($where,'jenis_sampah');
		redirect('index.php/C_Jenis');
		}


	}
 ?>