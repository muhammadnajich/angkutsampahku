<?php
class C_Home extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Login');

    }
    function index()
    {
        $this->load->view('Front/V_Home');
    }
    function admin(){
    	$this->load->view('Back/V_Home');
    }

    
   

}