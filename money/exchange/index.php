<?php
    ob_start();
    session_start();
    if(file_exists('../config.php')){
        require_once('../config.php');
    }

    if(file_exists('../function.php')){
        require_once('../function.php');
    }
    
    if(!logged_in()){
        header('location: ../index.php');
    }

    unset($_SESSION['exchange']);
    unset($_SESSION['order']);
    unset($_SESSION['confirm']);
    unset($_SESSION['notice']);
    $rand = rand(10,99);
    $comnam = $_SESSION['name'];
    $comname = $comnam.$rand;
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
    
 
    
</head>
<body>
   
<!--**** HEADER AREA ****-->
   
    <header class="header-area">
       <div class="middle">
                    <div class="header-text">
                         <p><a href="profile.php" style="text-transform: capitalize;"><i style="margin-right: 5px; color: #474787;" class="fas fa-user"></i><?php echo $_SESSION['name']; ?></a><span></span><a href="logout.php"><i style="margin-right: 5px; color: #474787;" class="fas fa-power-off"></i>Log out</a></p>
                    </div>
                    <div class="header-dash">
                        
                         <p><a href="profile.php" style="float:right; text-transform: capitalize;"><i style="margin-right: 5px; color: #ffffff" class="fas fa-user"></i><?php echo $_SESSION['name']; ?></a><span></span><a href="logout.php"><i style="margin-right: 5px; color: #ffffff;" class="fas fa-power-off"></i>Log out</a></p>
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
                    <p><a href="profile.php" style="text-transform: capitalize;"><i style="margin-right: 5px; color: #474787;" class="fas fa-user"></i><?php echo $_SESSION['name']; ?></a><span></span><a href="logout.php"><i style="margin-right: 5px; color: #474787;" class="fas fa-power-off"></i>Log out</a></p>
                </div>
            </div>
        </div>
    </section>
    
                      
              
                       
                        <!--MAIN AREA-->
    
    <section class="main-area">
      <div class="middle">
           <section class="main-left-area">
                                        
                                        <!--TRANSACTION AREA-->    
                                        
        <?php
               
   
               
          if(isset($_POST['exchange'])){
              
              $rand = rand(1,999);
              $_SESSION['exchange'] = 'exchange';
            
              $from = isset($_POST['from']) ? $_POST['from'] : NULL;
              $to = isset($_POST['to']) ? $_POST['to'] : NULL;
              
              $samount = isset($_POST['samount']) ? $_POST['samount'] : NULL;
              $ramount = isset($_POST['ramount']) ? $_POST['ramount'] : NULL;
              
              
              
              if($from == NULL || $samount == NULL || $ramount == 'NaN'){
                  $select = "<p class='style'>Please fill all the input....</p>";
              }else{
                  $_SESSION['rand'] = $rand;
                  $_SESSION['from'] = $from;
                  $_SESSION['to'] = $to;
                  $_SESSION['samount'] = $samount;
                  $_SESSION['ramount'] = $ramount;
                  
                  $query = $connect->query("INSERT INTO exch_info VALUES(NULL,'$from','$to','$samount','$ramount','$rand')");
                  
                  if($query){
                      header('location: exchange.php');
                  }else{
                      echo 'Fail';
                  }
                
                  
              }
          }     
        ?>
                        <?php if(isset($select)){echo $select;}?>                
        <section class="main-service-area">
                <div class="service-blur">
                   <form action="index.php" method="post">
                       <div class="transaction">
                            <div class="main-send transciver">
                                <div class="send-logo transciver-logo" id="src-img">
                                    <img src="../img/bik.png" alt="bikash">
                                </div>
                                <div class="send-info">
                                    
                                    <div class="send-box transciver-box">
                                       <h2>Send from</h2>
                                        <select name="from" id="from" onchange="populate(this.id,'to')" onchange="fromto()" onclick="fromto()" oninput="fromto()">
                                             <option value="" disabled selected hidden>-- Select One --</option>
                                           <option class="ccc" value="net">Neteller.USD</option>
                                            <option class="ccc" value="skrill">Skrill.USD</option>
                                            
                                            <option class="ccc" value="dbbl">DBBL Bank BDT</option>
                                            <option class="ccc" value="web">WebMoney.USD</option>
                                            <option class="ccc" value="pay">Payoneer.USD</option>
                
                                            <option class="ccc" value="bik">Bikash.BDT</option>
                                            <option class="ccc" value="roc">Rocket.BDT</option>
                                            <option class="ccc" value="nog">Nogod.BDT</option>
                                        </select>
                                        <input type="text" name="samount" placeholder="Amount" id="input" onclick="fromto()" oninput="fromto()" autofocus>
                                         <p id="demo"><span class="rate">Exchange Rate :</span> 1 USD = 88 BDT </p>
                                    </div> 
                                </div>
                             </div>
                             
                                                <!--RECEIVER INFO-->
                             
                            <div class="main-receive transciver">
                                <div class="receive-info">
                                    
                                    <div class="receive-logo transciver-logo" id="img-src2">
                                        <img src="../img/net.png" alt="neteler">
                                    </div>
                                    
                                    <div class="receive-box transciver-box">
                                       <h2>Sent to</h2>
                                        <select name="to" id="to"  onchange="fromto()" onclick="fromto()" oninput="fromto()">
                                        </select>
                                        
                                        <input type="text" name="ramount" id="output" style="cursor:not-allowed">
                                        <p>Reserve : 200 USD</p>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <input type="submit" value="Exchange" name="exchange" class="square" onclick="display()">
                </form>
             </div>
        </section>

                                <!--TESTIMONIAL AREA-->
                                
                    <section class="testimonial-area">
                            <div class="testimonial-work">
                                <h2>Awesome Testimonial</h2>
                                <hr>
                                <div class="testimonial-box">
                        <?php
                                $show_query = $connect->query("SELECT * FROM comment LIMIT 3");
                                  
                                 while($show_row = mysqli_fetch_object($show_query)) : ?>
                                   
                                    <div class="testimonial-slide">
                                        <p>
                                        <?php 
                                        if($show_row->status == 'valid'){
                                            echo $show_row->comment;
                                        }
                                            ?> 
                                        </p>
                                        <p style="text-transform: capitalize;">
                                        - <?php
                                            if($show_row->status == 'valid'){
                                                 echo $show_row->comname;
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
        $select = $connect->query("SELECT * FROM exchant_total ORDER BY ttlid DESC");
        while($row = mysqli_fetch_object($select)) :    ?>
                                    <tr>
                                        <td><img src="../img/<?php echo $row->sendicon;?>" alt="bikash"></td>
                                        <td><img src="../img/<?php echo $row->receiveicon;?>" alt="netteler"></td>
                                        <td><?php echo $row->total;?></td>
                                        <td><?php echo $row->name;?></td>
                                        <td><?php echo $row->date;?></td>
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
                                <img src="../img/bik.png" alt="bikash">
                            </div>
                            <div class="reserve-text">
                                <p>Bikash BDT</p>
                                <p>50000 BDT</p>
                            </div>
                        </div>
                        <div class="reserve-count">
                            <div class="reserve-icon">
                                <img src="../img/net.png" alt="neteler">
                            </div>
                            <div class="reserve-text">
                                <p>Neteller.USD</p>
                                <p>130 USD</p>
                            </div>
                        </div>
                        <div class="reserve-count">
                            <div class="reserve-icon">
                                <img src="../img/dbbl.png" alt="dbbl">
                            </div>
                            <div class="reserve-text">
                                <p>DBBL BDT</p>
                                <p>50000 BDT</p>
                            </div>
                        </div>
                        <div class="reserve-count">
                            <div class="reserve-icon">
                                <img src="../img/nog.png" alt="nogod">
                            </div>
                            <div class="reserve-text">
                                <p>Nogod.BDT</p>
                                <p>130 BDT</p>
                            </div>
                        </div>
                        <div class="reserve-count">
                            <div class="reserve-icon">
                                <img src="../img/pay.png" alt="pay">
                            </div>
                            <div class="reserve-text">
                                <p>Payoneer.USD</p>
                                <p>100 USD</p>
                            </div>
                        </div>
                        <div class="reserve-count">
                            <div class="reserve-icon">
                                <img src="../img/web.png" alt="web">
                            </div>
                            <div class="reserve-text">
                                <p>WebMoney.USD</p>
                                <p>130 USD</p>
                            </div>
                        </div>
                        <div class="reserve-count">
                            <div class="reserve-icon">
                                <img src="../img/roc.png" alt="roc">
                            </div>
                            <div class="reserve-text">
                                <p>Rocket.BDT</p>
                                <p>130 BDT</p>
                            </div>
                        </div>
                        <div class="reserve-count">
                            <div class="reserve-icon">
                                <img src="../img/skrill.png" alt="skrill">
                            </div>
                            <div class="reserve-text">
                                <p>Skrill.USD</p>
                                <p>130 USD</p>
                            </div>
                        </div>
                       
                    </div>
                </div>
                
                 <!--COMMENTS FORM-->
           
           <?php
               
               if(isset($_POST['com'])){
                   $comment = $_POST['comment'];
                   $state = 'valid-not';

                   if($comment == NULL){
                       echo " ";
                   }else{
                       $comment_query = $connect->query("INSERT INTO comment VALUES(NULL,'$comment','$state','$comname')");

                   }
               }
               
               
               ?>
           
           <section class="comment-area">
               <div class="comment">
                   <form action="index.php" method="post">
                      <h2>What do you think?</h2>
                       <textarea name="comment" placeholder="Write your opinion" maxlength="250"></textarea>
                       <input type="submit" value="Submit" name="com">
                   </form>
               </div>
           </section>
                

           </section>
           
                      
           
        </div>   
    </section>
    
            
                      
   
    

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

    
</body>
</html>




 
  
 
