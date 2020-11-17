<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 28/09/2018
 * Time: 21.15
 */

class M_Login extends CI_Model
{
    function cek ($user,$pass){
        $tbl = "akun";
        $this->db->select("*");
        $this->db->from($tbl);
        $this->db->where("(username = '$user')",NULL,FALSE);
        $this->db->where("password",$pass);
        return $this->db->get();
    }
}