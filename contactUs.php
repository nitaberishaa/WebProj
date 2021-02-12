<?php
    include_once('dbFunction.php');
	//Per contactus
    $funObj3 = new dbFunction();
    if(isset($_POST['send'])){
        $emri = $_POST['emri'];
        $email = $_POST['emaili'];
        $mesazhi=$_POST['message'];
        $usercontact = $funObj3->contactUs($emri,$email,$mesazhi);
        if ($usercontact) {
         echo "<h1>Loged in successfully</h1>";
           header("location:index.php");
        } else {
            echo "<script>alert('Emailid / Password Not Match')</script>";
        }
    } 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>|Contact Us|</title>
    <link rel="stylesheet" href="style.css"/>

</head>
<body>
    
<?php  include 'header.php' ?>

    <section class="contact" id=contact>
        <div class="title3">
            <h2 class="title">Contact Us</h2>
            <p>Lorem ipsum dolor sit amet, consecteur adipisicing elit.</p>
        </div>
        <div class="formContact">
            <h3>Send Message</h3>
            <form  action="#" name="send" class="form-contact" method="post">
            <div class="inputBox">
                <input type="text" name="emri" id="emri" placeholder="Name">
            </div>
            <div class="inputBox">
                <input type="email" name="emaili" id="emaili"placeholder="Email">
            </div>
            <div class="inputBox">
                <textarea id="message" name="message" placeholder="Write Here"></textarea>
            </div>
            <button name="send" id="send" method="post">Send</button>
       
            </form>
        </div>

    </section>
    
    <?php  include 'footer.php' ?>

</body>
<script type="text/javascript" src="conus.js">
   
    
</script>
</html>