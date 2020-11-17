<?php 
 
class M_Data_Order extends CI_Model{
	function tampil_data(){
		$sql = $this->db->query('SELECT id_sampah, alamat, username, jenis_sampah, berat, gambar FROM sampah INNER JOIN akun on sampah.id_user = akun.id_user INNER JOIN jenis_sampah on sampah.id_jenis = jenis_sampah.id_jenis WHERE status="Proses"');
		return $sql;
	}
	function cancel_data(){
		$sql = $this->db->query('SELECT id_sampah, username, jenis_sampah, berat, gambar,catatan FROM sampah INNER JOIN akun on sampah.id_user = akun.id_user INNER JOIN jenis_sampah on sampah.id_jenis = jenis_sampah.id_jenis WHERE status="Ditolak"');
		return $sql;
	}

	function accept_data(){
		$sql = $this->db->query('SELECT id_sampah, username, jenis_sampah, berat, gambar,catatan FROM sampah INNER JOIN akun on sampah.id_user = akun.id_user INNER JOIN jenis_sampah on sampah.id_jenis = jenis_sampah.id_jenis WHERE status="Diterima"');
		return $sql;
	}

	public function tampil($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	function pilih_data(){
		$sql = $this->db->query('SELECT * FROM driver WHERE status = "Free"');
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
	public function get_by_id($id_sampah)
  {
    $this->db->where('id_sampah', $id_sampah);
    return $this->db->get('sampah')->row();
  }
}

?>