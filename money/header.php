<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Money Exchange</title>
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700&display=swap" rel="stylesheet"> 
    
<!--    JQUERY-->
        

    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    
    

<!--<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>-->

    <!--    <script src="https://kit.fontawesome.com/b2ee706e8c.js" crossorigin="anonymous"></script>-->
    <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
   <script src="js/script.js" type="text/javascript"></script>
     <script type="text/javascript">
        
               (function($){
                    jQuery(document).ready(function(){
                        jQuery('.bars').click(function(){
                            jQuery('.menu').slideToggle();
                        }) 
                    });
               }(jQuery));
       
        function populate(s1,s2){
            var s1 = document.getElementById(s1);
            var s2 = document.getElementById(s2);
            s2.innerHTML = "";
            if(s1.value == "net" || s1.value == "skrill" || s1.value == "web" || s1.value == "pay"){
                var optionArray = ["bik|Bikash.BDT","dbbl|DBBL Bank BDT","roc|Rocket.BDT","nog|Nogod.BDT"];
            }else if( s1.value == "roc" || s1.value == "bik" || s1.value == "dbbl" || s1.value == "nog") {
                var optionArray = ["skrill|Skrill.USD","net|Neteller.USD","web|WebMoney.USD","pay|Payoneer.USD"];
            }
            for(var option in optionArray){
                var pair = optionArray[option].split("|");
                var newOption = document.createElement("option");
                newOption.value = pair[0];
                newOption.innerHTML = pair[1];
                s2.options.add(newOption);
            }
        }
       
    </script>
    
</head>
<body>
   
<!--**** HEADER AREA ****-->
   
    <header class="header-area">
       <div class="middle">
                    <div class="header-text">
                        <p><a href="login.php"><i style="margin-right: 5px;" class="fas fa-user"></i>Login</a><span>/</span><a href="reg.php">Create account</a></p>
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
                <a href="index.php"><img src="img/logo.png" alt="Logo"></a>
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
                    <p><a href="login.php"><i style="margin-right: 5px; clolor: #474787;" class="fas fa-user"></i>Login</a><span>/</span><a href="reg.php">Create account</a></p>
                </div>
            </div>
        </div>
    </section>
    