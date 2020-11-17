<?php
class C_Utama extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Login');
        $this->load->model('M_Data_Utama');

    }
    function index()
    {
        $this->load->view('Front/V_Utama');
    }

    function Akun(){
        $this->load->view('Front/V_Akun');
    }

    
   

}