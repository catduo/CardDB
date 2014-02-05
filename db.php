<?php
    class DB {
        public $conn;

        public function __construct() {
        }

        public function connect($ip,$username,$password,$dbname) {
            $this->dbname = $dbname;

            $this->conn = mysqli_connect($ip, $username, $password) or die(mysqli_error($this->conn));
            mysqli_select_db($this->conn,$dbname);
        }

        public function getAllCards() {
            $result = mysqli_query($this->conn,"SELECT * FROM cards_against_humanity");
            if ($result === FALSE) {
                echo "rawr";
                die(mysqli_error($this->conn));
            }
            $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
            return $data;
        }

        public function addStatistic($user_id,$white_id,$black_id,$stat) {
            mysqli_query($this->conn,"INSERT INTO stats VALUES ($user_id,$white_id,$black_id,'$stat')");
        }

        public function close() {
            mysqli_close($this->conn);
        }
    }
?>
