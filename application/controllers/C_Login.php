<?php
class C_Login extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Login');
    }
    public function index()
    {
            $this->load->view('Front/V_Login');
    }
    public function auth(){
        $this->form_validation->set_rules('username', 'username', 'required|trim|xss_clean');
        $this->form_validation->set_rules('password', 'password', 'required|trim|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Front/V_Login');
        }else{
            $usr    = $this->input->post('username');
            $psw    = md5($this->input->post('password'));
            $cek    = $this->M_Login->cek($usr,$psw);
            if($cek->num_rows() != 0){
                foreach ($cek->result() as $dat){
                    $sess_data['isLoginAdmin']      = TRUE;
                    $sess_data['user']              = $dat->username;
                    $sess_data['id_user']              = $dat->id_user;
                    $sess_data['point']              = $dat->point;
                    $sess_data['email']              = $dat->email;
                    $sess_data['hak']               = $dat->hak_akses;
                    $this->session->set_userdata($sess_data);
                }
                $this->session->set_userdata($sess_data);
                    if ($this->session->userdata('hak') == 'admin') {
                        redirect('index.php/C_Home/admin');
                    }else{
                        redirect('index.php/C_Utama');     
                    }
            }else {
                $this->session->set_flashdata('failed', '<br>Username atau Password yang anda masukkan salah.');
                redirect('index.php/C_Login');
            }
        }
    }
    function logout(){
        $this->session->sess_destroy();
        redirect('index.php/C_Login');
    }

}