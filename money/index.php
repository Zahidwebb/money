<?php 

session_start();

if(file_exists('function.php')){
    require_once('function.php'); 
}

 
if(isset($_SESSION['success'])){
    header('location: exchange/index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
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
    
   <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5df4c668d96992700fcc4619/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


    
</head>
<body id="dark">
   
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
                   
              
                       
                        <!--MAIN AREA-->
    
    <section class="main-area">
      <div class="middle">
           <section class="main-left-area">
                                        
                                        <!--TRANSACTION AREA-->
                                        
                                        
                                        
        <section class="main-service-area">
                <div class="service-blur">
                
                       <div class="transaction">
                            <div class="main-send transciver">
                                <div class="send-logo transciver-logo" id="left-img">
                                    <img src="img/bik.png" alt="bikash">
                                </div>
                                <div class="send-info">
                                    
                                    <div class="send-box transciver-box">
                                       <h2>Send from</h2>
                                        <select name="currency" id="send" onchange="connect(this.id,'receive')" onchange="firstsecond()" onclick="firstsecond()" oninput="firstsecond()">
                                             <option value="" disabled selected hidden>-- Select One --</option>
                                           <option class="ccc" value="nett">Neteller.USD</option>
                                            <option class="ccc" value="skrilll">Skrill.USD</option>
                                            
                                            <option class="ccc" value="dbbll">DBBL Bank BDT</option>
                                            <option class="ccc" value="webb">WebMoney.USD</option>
                                            <option class="ccc" value="payy">Payoneer.USD</option>
                        
                                            <option class="ccc" value="bikk">Bikash.BDT</option>
                                            <option class="ccc" value="rocc">Rocket.BDT</option>
                                            <option class="ccc" value="nogg">Nogod.BDT</option>
                                        </select>
                                        <input type="number" name="input" placeholder="Amount" id="inputsend" onclick="firstsecond()" oninput="firstsecond()">
                                         <p id="demo"><span class="rate">Exchange Rate :</span> 1 USD = 88 BDT </p>
                                    </div> 
                                </div>
                             </div>
                             
                                                <!--RECEIVER INFO-->
                             
                            <div class="main-receive transciver">
                                <div class="receive-info">
                                    
                                    <div class="receive-logo transciver-logo" id="right-img">
                                        <img src="img/net.png" alt="neteler" id="receiveimg">
                                    </div>
                                    
                                    <div class="receive-box transciver-box">
                                       <h2>Sent to</h2>
                                        <select name="currency" id="receive"  onchange="firstsecond()" onclick="firstsecond()" oninput="firstsecond()">
                                        </select>
                                        
                                        <input type="text" name="output" id="outputreceive" disabled  style="cursor:not-allowed">
                                        <p>Reserve : 200 USD</p>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <button onclick="login()">Exchange</button>
             </div>
        </section>
                                        <!--ALERT-->
                                <div id="box">
                                    <h1>Sorry!</h1>
                                    <p>Create an account and then Login Please...</p>
                                    <a href="reg.php" onclick="login()">Ok</a>
                                </div>

                                <!--TESTIMONIAL AREA-->
                                
                    <section class="testimonial-area">
                            <div class="testimonial-work">
                                <h2>Awesome Testimonial</h2>
                                <hr>
                                <div class="testimonial-box">  <?php
                                $show_query = $connect->query("SELECT * FROM comment ORDER BY comid DESC LIMIT 3");
                                  
                                 while($show_row = mysqli_fetch_object($show_query)) : ?>
                                   
                                    <div class="testimonial-slide">
                                        <p>
                                        <?php 
                                        if($show_row->status == 'valid'){
                                            echo $show_row->comment;
                                        }else{
                                            echo "Very fast website. I like it very much.";
                                        }
                                            ?> 
                                        </p>
                                        <p style="text-transform: capitalize;">
                                        - <?php
                                            if($show_row->status == 'valid'){
                                                 echo $show_row->comname;
                                            }else{
                                                echo 'Maruf';
                                            }
                                            ?>
                                        </p>
                                    </div>
                                    
                                    
                     <?php endwhile; ?>     
                                </div>
                        </div>
                    </section>
                    
                                                <!-- LATEST EXCHANGE-->
                    
                    <section class="latest-exchange">
                            <div class="latest-table">
                                <h2>Latest Exchange</h2>
                                <table border="1">
                                    <tbody>
                                    <tr>
                                        <th>Send</th>
                                        <th>Receiver</th>
                                        <th>Amount</th>
                                        <th>Username</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
        <?php
        $select = $connect->query("SELECT * FROM exchant_total ORDER BY ttlid DESC LIMIT 15");
        while($row = mysqli_fetch_object($select)) :    ?>
                                    <tr>
                                        <td><img src="img/<?php echo $row->sendicon;?>" alt="bikash"></td>
                                        <td><img src="img/<?php echo $row->receiveicon;?>" alt="netteler"></td>
                                        <td><?php echo $row->total;?></td>
                                        <td><?php echo $row->name;?></td>
                                        <td><?php echo $row->date; ?></td>
                                        <td><?php 
                                            if($row->status == 'Pending'){
                                                echo '<span class="pen">Pending...</span>';
                                            }else{
                                                echo '<span class="suc">Success <i class="fas fa-check" style="font-size: 12px"></i></span> ';
                                            }
                                            ?></td>
                                    </tr>
                                    
             <?php endwhile;?>      
                                </tbody>
                                </table>
                        </div>
                    </section>
           </section>

                                <!--SIDEBER AREA-->


           
           <section class="sidebar-area">
                <div class="main-reserve">
                    <div class="main-top">
                        <h2>Our Reserve</h2>
                        <hr>
                        <div class="reserve-count">
                            <div class="reserve-icon">
                                <img src="img/bik.png" alt="bikash">
                            </div>
                            <div class="reserve-text">
                                <p>Bikash BDT</p>
                                <p>50000 BDT</p>
                            </div>
                        </div>
                        <div class="reserve-count">
                            <div class="reserve-icon">
                                <img src="img/net.png" alt="neteler">
                            </div>
                            <div class="reserve-text">
                                <p>Neteller.USD</p>
                                <p>130 USD</p>
                            </div>
                        </div>
                        <div class="reserve-count">
                            <div class="reserve-icon">
                                <img src="img/dbbl.png" alt="dbbl">
                            </div>
                            <div class="reserve-text">
                                <p>DBBL BDT</p>
                                <p>50000 BDT</p>
                            </div>
                        </div>
                        <div class="reserve-count">
                            <div class="reserve-icon">
                                <img src="img/nog.png" alt="nogod">
                            </div>
                            <div class="reserve-text">
                                <p>Nogod.BDT</p>
                                <p>130 BDT</p>
                            </div>
                        </div>
                        <div class="reserve-count">
                            <div class="reserve-icon">
                                <img src="img/pay.png" alt="pay">
                            </div>
                            <div class="reserve-text">
                                <p>Payoneer.USD</p>
                                <p>100 USD</p>
                            </div>
                        </div>
                        <div class="reserve-count">
                            <div class="reserve-icon">
                                <img src="img/web.png" alt="web">
                            </div>
                            <div class="reserve-text">
                                <p>WebMoney.USD</p>
                                <p>130 USD</p>
                            </div>
                        </div>
                        <div class="reserve-count">
                            <div class="reserve-icon">
                                <img src="img/roc.png" alt="roc">
                            </div>
                            <div class="reserve-text">
                                <p>Rocket.BDT</p>
                                <p>130 BDT</p>
                            </div>
                        </div>
                        <div class="reserve-count">
                            <div class="reserve-icon">
                                <img src="img/skrill.png" alt="skrill">
                            </div>
                            <div class="reserve-text">
                                <p>Skrill.USD</p>
                                <p>130 USD</p>
                            </div>
                        </div>
                       
                    </div>
                </div>


                                    <!--TAKA RATE AREA-->

                    

           </section>
        </div>   
    </section>
                                    <!--   CHAT APP
  
       
        <div class="chat-toggle">
           চ্যাটিং..
        </div>
            <div class="chat-box">
               <div class="icon"><i class="fas fa-times"></i></div>
               <div class="top">
                    <p style="text-align:centre">welcome to chat</p>
                </div>
                <div class="square">
                
                </div>
                <form action="" method="POST" id="chatmsg">
                   <input type="text" id="speech" placeholder="Type something...">
                    <input type="submit" value="Send" id="chatmsg">
                </form>
            </div>
               
                         -->

                                <!--**** FOOTER AREA ****-->
                    
    <footer class="footer-area">
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
    
    <!--<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>-->

    <!--    <script src="https://kit.fontawesome.com/b2ee706e8c.js" crossorigin="anonymous"></script>-->
    <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="js/chat.js"></script>
    <script src="js/main.js" type="text/javascript"></script>
   <script src="js/script.js" type="text/javascript"></script>
     <script type="text/javascript">
        
               (function($){
                    jQuery(document).ready(function(){
                        jQuery('.bars').click(function(){
                            jQuery('.menu').slideToggle();
                        });
                        
                    });
                   
               }(jQuery));
       
        function connect(ss1,ss2){
            var ss1 = document.getElementById(ss1);
            var ss2 = document.getElementById(ss2);
            ss2.innerHTML = "";
            if(ss1.value == "nett" || ss1.value == "skrilll" || ss1.value == "webb" || ss1.value == "payy"){
                var optionArray = ["bikk|Bikash.BDT","dbbll|DBBL Bank BDT","rocc|Rocket.BDT","nogg|Nogod.BDT"];
            }else if( ss1.value == "rocc" || ss1.value == "bikk" || ss1.value == "dbbll" || ss1.value == "nogg") {
                var optionArray = ["skrilll|Skrill.USD","nett|Neteller.USD","webb|WebMoney.USD","payy|Payoneer.USD"];
            }
            for(var option in optionArray){
                var pair = optionArray[option].split("|");
                var newOption = document.createElement("option");
                newOption.value = pair[0];
                newOption.innerHTML = pair[1];
                ss2.options.add(newOption);
            }
        };
         
         var c = 0;
         function login(){
             if(c == 0){
                 document.getElementById('box').style.display = 'block';
                 c = 1;
             }else {
                 document.getElementById('box').style.display = 'none';
                 c = 0;
             }
         }
    </script>
</body>
</html>





  
 
