<?php
    include "db.php";
    class banner {
        
        public $id_banner; 
        public $judul;
        public $alamat;
        public $gambar;
        public $id_galeri;
        public function getData () {
            $db= new database();
            $db_con = $db->connect();
            $sql ="select * from banner";
            $data= $db_con->query($sql);
            $db_con = $db->close();
            return $data;
        }
        public function getDataDetail ($id_banner){
            $db= new database();
            $db_con = $db->connect();
            $sql ="select * from banner where = '{$id_banner}'";
            $data= $db_con->query($sql);
            $db_con = $db->close();
            return $data->fetch_array();
        }

    }
?>