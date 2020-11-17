<?php
	include_once "db.php";

	class komentar {
	//variable untuk login
		public $nama;
		public $rt;
		public $rw;
        public $komentar;
		public $tgl_dibuat;

		public function getData(){
		
			$db = new Database();
			$dbConnect = $db->connect();
			$sql = "SELECT * FROM komentar order by id_komentar DESC";
			$data = $dbConnect->query($sql);
			$dbConnect = $db->close();
			return $data;
			}
		
		//Method untuk membuat data admin
		public function create_komentar() {
		$db = new Database();
		//membuka koneksi
		$dbConnect = $db->connect();
		//query menyimpan data
		$data = mysqli_query($dbConnect ,"INSERT INTO komentar
		(
			nama,
			rt,
			rw,
			komentar,
			tgl_dibuat
		)
		VALUES
		(
			'{$this->nama}',
			'{$this->rt}',
			'{$this->rw}',
			'{$this->komentar}',
			'{$this->tgl_dibuat}'
		);");
		
		//menampung error query simpan data
		$error = $dbConnect->error;
		//menutup koneksi
		$dbConnect = $db->close();
		//mengembalikan nilai error
		return $error;
		}

			
			
	}
?>