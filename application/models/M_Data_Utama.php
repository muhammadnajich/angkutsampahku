<?php 
 
class M_Data_Utama extends CI_Model{
	function notif(){
		$sql = $this->db->query('SELECT COUNT(id_sampah) as notif FROM sampah WHERE catatan!="tidak ada"');
		return $sql;
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
	public function get_by_id($id_user)
  {
    $this->db->where('id', $id_user);
    return $this->db->get('akun')->row();
  }
}

?>