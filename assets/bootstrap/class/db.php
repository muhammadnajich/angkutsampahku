<?php
    class database {
        private $con; 
        public function connect() {
            $host = "localhost";
            $name = "root";
            $pass = "";
            $db ="layanan";
            $this->con=new mysqli($host,$name,$pass,$db);
            return $this->con;
        }
        public function close (){
            return $this->con->close();
        }

    }
?>