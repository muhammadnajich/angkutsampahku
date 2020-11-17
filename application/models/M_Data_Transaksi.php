<?php 
 
class M_Data_Transaksi extends CI_Model{
	function tampil_data(){
		$sql = $this->db->query('SELECT username, tarik_point, tanggal FROM transaksi INNER JOIN akun on transaksi.id_user = akun.id_user');
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
	public function get_by_id($id_transaksi)
  {
    $this->db->where('id_transaksi', $id_transaksi);
    return $this->db->get('transaksi')->row();
  }
}

?>