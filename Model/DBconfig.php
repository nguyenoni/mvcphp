<?php

    class DBconfig {
        protected static $dbhost = "localhost";
        protected static $dbuser = "root";
        protected static $dbpass = "";
        protected static $dbname = "mvcphp";
        
        public static $conn = NULL;
        protected static $result = NULL;

        public function connect(){
            self::$conn = new mysqli(self::$dbhost, self::$dbuser, self::$dbpass, self::$dbname);
            // self::$conn =  mysqli_connect(self::$dbhost, self::$dbuser, ̀self::$dbpass, self::$dbname);
            if(!self::$conn){
                echo "Connection!";
                exit();
            }
            else{
                mysqli_set_charset(self::$conn, 'utf8');
            }
            return self::$conn;
        }

        public function execute($sql){
            self::$result = self::$conn->query($sql);
            return self::$result;
        }

        // get data
        public function get_data(){
            if(self::$result){
                $data = mysqli_fetch_array(self::$result);
            }
            else{
                $data = 0;
            }
            return $data;
        }
        // get all data
        public function get_add_data(){
            if(!$this-result){
                $data = 0;
            }
            else{
                while ($data = self::$get_data()) {
                $data[] = $data;
                }
            }
            return $data;
        }
    // inser data
    // username , email, phone, fullname
        public function insert_data($username, $email, $phone, $fullname){
            $sql = "INSERT INTO users(id, username, email, phone, fullname) VALUES(null, $username, $email, $phone, $fullname)";
            return self::$execute($sql); 
        }
        // Edit data
        public function update_data($id, $username, $email, $phone, $fullname){
            $sql = "UPDATE users SET username = $username, email = $email, phone = $phone, fullname = $fullname";
            return self::$execute($sql);
        }
        // delete data
        public function delete($id){
            $sql = "DELETE FROM users WHERE id = $id";
            return self::$execute($sql);
        }
    }

?>