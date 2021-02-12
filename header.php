<header>
        <a href="#" class="logo">Beauty<span>Salon</span></a>
        <ul class="nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="contactUs.php">Contact Us</a></li>
            <li><a href="treatments.php">Treatments</a></li>
            <li><a href="product.php">Products</a></li>
            <li><a href="user.php">User</a></li>
            <?php
            session_start();
            if(isset($_SESSION['role']) && $_SESSION['role']==1) {
            ?>
                <li>
                    <a href="dashboard.php">Dashboard</a>
                </li>
            
            <?php
            }
            ?>
        </ul>
</header>