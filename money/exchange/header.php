<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Money Exchange</title>
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700&display=swap" rel="stylesheet"> 
    
<!--    CSS-->
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    
    

<!--<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>-->

    <!--    <script src="https://kit.fontawesome.com/b2ee706e8c.js" crossorigin="anonymous"></script>-->
    <script src="../js/jquery-3.4.1.min.js" type="text/javascript"></script>
   <script src="../js/script.js" type="text/javascript"></script>
   <script type="text/javascript">
        
               (function($){
                    jQuery(document).ready(function(){
                        jQuery('.bars').click(function(){
                            jQuery('.menu').slideToggle();
                        }) 
                    });
               }(jQuery));
       
    </script>


    
</head>
<body>
   
<!--**** HEADER AREA ****-->
   
    <header class="header-area">
       <div class="middle">
                    <div class="header-text">
                         <p><a href="profile.php"><i style="margin-right: 5px; color: #474787;" class="fas fa-user"></i><?php echo $_SESSION['name']; ?></a><span></span><a href="logout.php"><i style="margin-right: 5px; color: #474787;" class="fas fa-power-off"></i>Log out</a></p>
                    </div>
                    <div class="header-dash">
                         <p><a href="profile.php" style="float:right"><i style="margin-right: 5px; color: #ffffff" class="fas fa-user"></i><?php echo $_SESSION['name']; ?></a><span></span><a href="logout.php"><i style="margin-right: 5px; color: #ffffff;" class="fas fa-power-off"></i>Log out</a></p>
                    </div>
                    <div class="top">
                       <marquee behavior="" direction=""><h4>PayPal and Payoneer user should buy minimum 50$ </h4></marquee>
                    </div>
           
        </div>
    </header>
    
                        <!-- **** MENU AREA ****-->
    
    <section class="menu-area">
       <div class="middle">
            <div class="logo-area">
                <a href="index.php"><img src="../img/logo.png" alt="Logo"></a>
                <i class="fas fa-bars bars"></i>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.php">Exchange</a></li>
                    <li><a href="#">Testimonial</a></li>
                    <li><a href="#">Affiliate</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="sign-area">
                <div class="login">
                    <p><a href="profile.php"><i style="margin-right: 5px; color: #474787;" class="fas fa-user"></i><?php echo $_SESSION['name']; ?></a><span></span><a href="logout.php"><i style="margin-right: 5px; color: #474787;" class="fas fa-power-off"></i>Log out</a></p>
                </div>
            </div>
        </div>
    </section>
    
     