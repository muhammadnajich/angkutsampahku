<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uploadimage_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  function get_all($where,$data){
        return $this->db->get_where($data,$where);
  }

  public function get_data_paket()
  {
    $this->db->select('*');
    $this->db->from('paket');
    return $this->db->get()->result();
  }

  public function get_by_id($id)
  {
    $this->db->where('mail_id', $id);
    return $this->db->get('mail')->row();
  }

  public function insert($data)
  {
    $this->db->insert('mail', $data);
  }

  public function update($id, $data)
  {
    $this->db->where('mail_id', $id);
    $this->db->update('mail', $data);
  }

  public function delete($id)
  {
    $this->db->where('mail_id', $id);
    $this->db->delete('mail');
  }

}
