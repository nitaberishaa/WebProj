<?php
class dbConnect{
    function __construct(){
        
    }
    public function Open(){
        require_once('config.php');
        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
        mysqli_select_db( $conn, DB_DATABASE);
        if(!$conn){
            die ("Cannot connect to the Database");
        }
     
        return $conn;
    }
    public function Close(){
        mysqli_close();
    }
}
?>