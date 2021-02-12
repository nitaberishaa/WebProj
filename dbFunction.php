<?php 
require_once 'dbConnect.php';
session_start();
    class dbFunction{
        function __construct(){
        }

        function __desctruct(){
        }

        public function UserRegister($username, $email, $pass){
            $db = new dbConnect();
            $role_user = false;
            $qr = mysqli_query($db->Open(),"INSERT INTO users(username, email, password, role_user) values('".$username."','".$email."','".$pass."','".$role_user."')") or die(mysql_error());
            return $qr;
        }

        
        public function Login($email,$pass){
            $db = new dbConnect();
            $res = mysqli_query($db->Open(),"SELECT * FROM users WHERE email='".$email."' AND password = '".$pass."'");
            $no_rows = mysqli_num_rows($res);

            if($no_rows == 1){
                $_SESSION['login'] = true;
                $_SESSION['uid'] = $user_data['ID'];
                $_SESSION['username'] = $user_data['username'];
                $_SESSION['email'] = $user_data['email'];
                $_SESSION['role'] = $user_data['role_user'];
                return TRUE;
            }
            else{
                return FALSE;
            }
        }

        public function isUserExist($email){
            $qr = mysqli_query("SELECT * FROM users WHERE email = '".$email."'");
            $row = mysqli_num_rows($qr);
            if($row >0){
                return true;
            }
            else{
                return false;
            }
        }

        public function isPassCorrect($pass,$checkpass){
        //per me bo check passwords
        }

        public function contactUs($emri,$email,$mesazhi){
            $db = new dbConnect();
            $qr = mysqli_query($db->Open(),"INSERT INTO contactus(Emri,Email,Mesazhi) values('".$emri."','".$email."','".$mesazhi."')") or die(mysql_error());
            return $qr;
        }
    }
?>