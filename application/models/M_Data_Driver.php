<?php 
 
class M_Data_Driver extends CI_Model{
	function tampil_data(){
		return $this->db->get('driver');
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function edit_data($where,$table){		
	    return $this->db->get_where($table,$where);
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function get_by_id($id_driver)
  {
    $this->db->where('id_driver', $id_driver);
    return $this->db->get('driver')->row();
  }
}

?>