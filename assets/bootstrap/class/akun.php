<?php
	include_once "db.php";

	class Akun {
	//variable untuk login
		public $username;
		public $password;
		public $id_admin;
        public $jabatan;
        
		//Method Login
		public function cek_Login(){
		$db = new Database();
		$dbConnect = $db->connect();
        $sql1 = "SELECT * from admin where username = '{$this->username}' && password='{$this->password}'";
		$sql1 = $dbConnect->query($sql1);
		
	//	$dbConnect = $db->close();
		$data1 = $sql1->fetch_assoc();
		
		
		$username = $data1['username'];
		$nama = $data1['username'];
		$id_admin = $data1['id_admin'];
				
		if($this->username==$username)
		{
				session_start();
				$_SESSION['username'] = $username;
				$_SESSION['nama'] = $nama;
				$_SESSION['id_admin'] = $id_admin;
				header("location:../../admin/index.php");
		
		}else{
				session_start();
				$_SESSION['pesan'] = "<p><div class='alert alert-danger' role='alert'> Gagal Login !!</div></p>";
				//memanggil tampilan create kembali
				header("location: ../index.php?page=login");	
			 }
		$error = $dbConnect->error;
		//menutup koneksi
		$dbConnect = $db->close();
		//mengembalikan nilai error
		return $error;
		}
		//Method untuk menampilkan data admin berdasarkan id admin
		public function getDetailAd($id_admin){
		
		$db = new Database();
		$dbConnect = $db->connect();
		$sql = "SELECT * FROM admin where id_admin = '{$id_admin}'";
		$data = $dbConnect->query($sql);
		$dbConnect = $db->close();
		return $data->fetch_array();
		}
		
		//Method untuk membuat data admin
		public function create_admin() {
		$db = new Database();
		//membuka koneksi
		$dbConnect = $db->connect();
		//query menyimpan data
		$data = mysqli_query($dbConnect ,"INSERT INTO admin
		(
			id_admin,
			username,
			username,
			password_ad
		)
		VALUES
		(
			'{$this->id_admin}',
			'{$this->username}',
			'{$this->username}',
			'{$this->password_ad}'
		);");
		
		//menampung error query simpan data
		$error = $dbConnect->error;
		//menutup koneksi
		$dbConnect = $db->close();
		//mengembalikan nilai error
		return $error;
		}

		public function update_admin() {
		$db = new Database();
		//membuka koneksi
		$dbConnect = $db->connect();
		//query menyimpan data
		$data = mysqli_query($dbConnect, "
			UPDATE admin
		SET 
			username='{$this->username}',
			password_ad='{$this->password_ad}'
			 
		WHERE 
		
			id_admin='{$this->id_admin}'
		");
		
		
	
		//menampung error query simpan data
		$error = $dbConnect->error;
		//menutup koneksi
		$dbConnect = $db->close();
		//mengembalikan nilai error
		return $error;
		}
		public function delete_admin() {
		$db = new Database();
		//membuka koneksi
		$dbConnect = $db->connect();
		//query menyimpan data
		$data = mysqli_query($dbConnect, "
		DELETE FROM 
			admin
		WHERE 
			id_admin='{$this->id_admin}'
		");
		
		//menampung error query simpan data
		$error = $dbConnect->error;
		//menutup koneksi
		$dbConnect = $db->close();
		//mengembalikan nilai error
		return $error;
		}
		
		
		
		//Method untuk membuat data admin
		public function create_user() {
		$db = new Database();
		//membuka koneksi
		$dbConnect = $db->connect();
		//query menyimpan data
		$data = mysqli_query($dbConnect ,"INSERT INTO user
		(
			id_usr,
			username_usr,
			password_usr,
			alamat_usr,
			kode_pos_usr,
			kota_usr,
			telepon,
			rek,
			nama_rek,
			bank
		)
		VALUES
		(
			'{$this->id_usr}',
			'{$this->username_usr}',
			'{$this->username_usr}',
			'{$this->password_usr}',
			'{$this->alamat_usr}',
			'{$this->kode_pos_usr}',
			'{$this->kota_usr}',
			'{$this->telepon}',
			'{$this->rek}',
			'{$this->nama_rek}',
			'{$this->bank}'
		);");
		
		//menampung error query simpan data
		$error = $dbConnect->error;
		//menutup koneksi
		$dbConnect = $db->close();
		//mengembalikan nilai error
		return $error;
		}

		public function update_user() {
		$db = new Database();
		//membuka koneksi
		$dbConnect = $db->connect();
		//query menyimpan data
		$data = mysqli_query($dbConnect, "
			UPDATE user
		SET 
			username_usr='{$this->username_usr}',
			username_usr='{$this->username_usr}',
			password_usr='{$this->password_usr}',
			alamat_usr='{$this->alamat_usr}',
			kode_pos_usr='{$this->kode_pos_usr}',
			kota_usr='{$this->kota_usr}',
			telepon='{$this->telepon}',
			rek='{$this->rek}',
			nama_rek='{$this->nama_rek}',
			bank='{$this->bank}'
			
		WHERE 
		
			id_usr='{$this->id_usr}'
		");
		
		
	
		//menampung error query simpan data
		$error = $dbConnect->error;
		//menutup koneksi
		$dbConnect = $db->close();
		//mengembalikan nilai error
		return $error;
		}
		
		public function delete_user() {
		$db = new Database();
		//membuka koneksi
		$dbConnect = $db->connect();
		//query menyimpan data
		$data = mysqli_query($dbConnect, "
		DELETE FROM 
			user
		WHERE 
			id_usr='{$this->id_usr}'
		");
		//menampung error query simpan data
		$error = $dbConnect->error;
		//menutup koneksi
		$dbConnect = $db->close();
		//mengembalikan nilai error
		return $error;
		}	
			
	}
?>