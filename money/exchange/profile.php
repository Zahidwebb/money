<?php
    session_start();

    if(file_exists('../function.php')){
        require_once('../function.php');
    }
    
    if(!logged_in()){
        header('location: ../index.php');
    }
?>



<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Money Exchange</title>
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700&display=swap" rel="stylesheet"> 
        
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="../css/responsive.css">
    
<!--    JQUERY-->
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
                       <marquee behavior="" direction=""><h4 style="color: #ffffff">PayPal and Payoneer user should buy minimum 50$ </h4></marquee>
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
                    <li><a href="#">Exchange</a></li>
                    <li><a href="#">Testimonial</a></li>
                    <li><a href="#">Affiliate</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="sign-area">
                <div class="login">
                    <p><a style="margin-right: 10px;" href="profile.php"><i style="margin-right: 5px; color: #474787;" class="fas fa-user"></i><?php echo $_SESSION['name']; ?></a><span></span><a href="logout.php"><i style="margin-right: 5px; color: #474787;" class="fas fa-power-off"></i>Log out</a></p>
                </div>
            </div>
        </div>
    </section>
    
    
<!--        PROFILE AREA-->
    
    <section class="hello-area">
           <div class="hello-text-area">
                <div class="hello-welcome">
                    <div class="hello-text"><p style="font-size:25px;color:#474787;">Welcome,<span style="font-weight:700;margin-left:5px;color: #d35400; text-transform: capitalize;"><?php echo $_SESSION['name']; ?></span></p>
                    <p>You last logged in at : 12 Oct 2010 12:23</p>
                    </div>
                    <div class="hello-cash">
                       <p style="color:#474787">Your last exachanges</p>
                        <h2 style="color: #d35400; margin:n5px 0; font-size: 30px;">34</h2>
                        <p style="color:#474787">USD</p>
                            
                    </div>
                </div>
               
                <div class="hello-exchange">
                    <div class="hello-main">
                        <div class="hello-img">
                            <div class="img-area">
                                <img src="../img/arab.jpg" alt="">
                            </div>
                        </div>

                        <div class="hello-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, saepe incidunt dolorum. Maxime blanditiis expedita repellat. Eveniet aliquid odio mollitia velit, soluta earum quas dolorem commodi, labore iste suscipit atque.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis nam unde voluptate, sint, fugit nihil, sapiente exercitationem nostrum dignissimos eum quasi rerum cumque dicta consequuntur aliquam dolore, harum illum tempore.</p>
                        </div>
                    </div>
                    
                </div>
                

            </div>
            <div class="hello-menu">
                <div class="hello-animate">
                    <div class="animate">
                       
                     </div>
                </div>
                <ul>
                   
                    <li><a href="myexchange.php"><i class="fas fa-sync-alt"></i>My Exchange</a></li>
                    <li><a href="testimonial.php"><i class="far fa-comments"></i>My Testimonial</a></li>
                    <li><a href="withdraw.php"><i class="fas fa-download"></i>withdrawals</a></li>
                    <li><a href="setting.php"><i class="fas fa-cogs"></i>setting</a></li>
                    <li><a href="verify.php"><i class="fas fa-check"></i>account verification</a></li>
                    
                    
                </ul>
            </div>
    </section>
         

                                <!--**** FOOTER AREA ****-->
                    
    <footer class="footer-area" style="margin-top: 40px;">
       <div class="middle">
            <div class="footer-link footer-col">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="#">Exchange</a></li>
                    <li><a href="#">Testimonial</a></li>
                </ul>
            </div>
            <div class="footer-term footer-col">
                <h2>Terms &amp; Supports</h2>
                <ul>
                    <li><a href="#">Frequently Asked Question</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Abour</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="footer-follow footer-col">
                <div class="footer-pac">
                    <h2>Follow Us On</h2>
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i>Facebook</a></li>
                        <li><a href="#"><i class="fab fa-youtube" aria-hidden="true"></i>Youtube</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>





  
 
