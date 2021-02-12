
<?php
    include_once('dbFunction.php');
	//Per login
    $funObj = new dbFunction();
    if(isset($_POST['login'])){
        $user_login = $_POST['user_emaillogin'];
        $password_login = $_POST['passlogin'];
        $user = $funObj->Login($user_login, $password_login);
        if ($user) {
            echo "<h1>Loged in successfully</h1>";
           header("location:index.php");
        } else {
            echo "<script>alert('Emailid / Password Not Match')</script>";
        }
    } 
	
	//Per register
	$funObj2 = new dbFunction();
	if(isset($_POST['register'])){
		$user_register=$_POST['username'];
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$confirmpass=$_POST['checkpass'];
			if($pass==$confirmpass){
			$sameemail=$funObj2->isUserExist($email);
			if(!$sameemail){
				$registeruser=$funObj2->UserRegister($user_register,$email,$pass);
				if($registeruser){
					echo "<h1>Registered successfully :) </h1>";
					header("location:index.php");
				}else{
					echo "<h1>Register has failed :(</h1>";
				}
			} else{
				echo"<h1>This email already exists!</h1>";
			}
		
		}else{
			echo"<h1>Your passwords don't match!</h1>";
		}
        }
		
	
	
	?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>|User|</title>
    <link rel="stylesheet" href="style.css"/>

</head>
<body>
<?php  include 'header.php' ?>

<section class="user" id=user>   
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#" name="register" method="post">
			<h1>Create Account</h1>
			
            <input type="text" id="name"  name="username" placeholder="Name" />
            <span id='validate-user'></span>
			<input type="email"  name="email" placeholder="Email" />
            <input type="password" id="password" name="pass" placeholder="Password" />
            <span id='validatepass'></span>
            <input type="password" id="checkpassword" name="checkpass" placeholder="Confirm Password" />
			<button id="signupbtn" name="register" >Sign Up</button>

		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#" name="login" method="post">
			<h1>Sign in</h1>
		
			<input type="email" name="user_emaillogin" placeholder="Email" />
			<input type="password" name ="passlogin" placeholder="Password" />
		
			<button id="signinbtn" name="login" >Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, there!</h1>
				<p>If you want to benefit more from us, please Sign Up!</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

    </section>
     <!--footer-->

	 <?php  include 'footer.php' ?>

</body>
<script type="text/javascript" src="js.js"></script>
</html>