<?php
    
    if(file_exists('../config.php')){
        require_once('../config.php');
    }

    if(file_exists('../function.php')){
        require_once('../function.php');
    } 

    if(file_exists('header.php')){
        require_once('header.php');
    }
    
    if(!logged_in()){
        header('location: ../index.php');
    }

    if(!confirm()){
            header('location: index.php');
        }
?>
 <?php
            if($_SESSION['from'] == 'nog'){
                $account = '01303192803';
                $bill = 'Our nogod personal number';
                $icon = 'nog.png';
            }else if($_SESSION['from'] == 'bik'){
                $account = '01722565750';  
                $bill = 'Our bikash personal number';
                $icon = 'bik.png';
            }else if($_SESSION['from'] == 'dbbl'){
                $account = '01722565750';  
                $bill = 'Our DBBL personal number';
                $icon = 'dbbl.png';
            }else if($_SESSION['from'] == 'net'){
                $account = 'Neteller@gmail.com';
                $bill = 'Our neteller account';
                $icon = 'net.png';
            }else if($_SESSION['from'] == 'roc'){
                $account = '01920964998-4'; 
                $bill = 'Our rocket personal number';
                $icon = 'roc.png';
            }else if($_SESSION['from'] == 'pay'){
                $account = 'Payoneer@gmail.com'; 
                $bill = 'Our payoneer account';
                $icon = 'pay.png';
            }else if($_SESSION['from'] == 'skrill'){
                $account = 'Skrill@gmail.com'; 
                $bill = 'Our skrill account';
                $icon = 'skrill.png';
            }else if($_SESSION['from'] == 'web'){
                $account = 'WebMoney@gmail.com';
                $bill = 'Our webMoney account';
                $icon = 'web.png';
            }else{
                $account = "Receive";
            };      
        ?>
        
        <?php

            if($_SESSION['to'] == 'skrill'){
                $iconr = 'skrill.png';
            }else if($_SESSION['to'] == 'web'){
                $iconr = 'web.png';
            }else if($_SESSION['to'] == 'pay'){
                $iconr = 'pay.png';
            }else if($_SESSION['to'] == 'net'){
                $iconr = 'net.png';
            }else if($_SESSION['to'] == 'bik'){
                $iconr = 'bik.png';
            }else if($_SESSION['to'] == 'roc'){
                $iconr = 'roc.png';
            }else if($_SESSION['to'] == 'dbbl'){
                $iconr = 'dbbl.png';
            }else if($_SESSION['to'] == 'nog'){
                $iconr = 'nog.png';
            }
        ?>

<div class="exchange-area order-area">
    <div class="middle exmid">
       <div class="exchange-bg">
            <div class="exchange-page">

                      <div class="exchange-text">
                         
    <?php
                          
            $rand = $_SESSION['rand'];
            $fee_in = $_SESSION['fee'];
                          
             $taka_in = $_SESSION['taka'];
            $sum_in = $_SESSION['sum'].$_SESSION['taka'];
            $pay_odr = $_SESSION['payorder'];
            
            $send = $_SESSION['from'];
            $receive = $_SESSION['to'];
            $sendamount = $_SESSION['samount'];
            $receiveamount = $_SESSION['ramount'];
            $name = $_SESSION['name'];
            $status = "Pending";
            $date = date("d/m/Y");
                          
        if(isset($_POST['confirm'])){
            $trans_id = $_POST['trans'];
            $_SESSION['notice'] = 'notice';
            if($trans_id == NULL){
                $insert = '<div style="color:red;">Insert your TrxID</div>';
            }else{
                $ttl_query = $connect->query("INSERT INTO exchant_total VALUES(NULL,'$icon','$send','$sendamount','$iconr','$receive','$receiveamount','$name','$fee_in','$sum_in','$pay_odr','$trans_id','$status','$rand','$date')");
                
                   $query = $connect->query("INSERT INTO trans_info VALUES(NULL,'$trans_id','$pay_odr','$fee_in','$sum_in','$status','$rand')");
               
                 if($query){
                     
                     header('Location: index.php');
                     
                }else{
                        echo 'no';
                    }
            }
            
        }                    
    ?>
                         
                          <div class="text-middle"> 
                            <form action="confirm.php" method="post" class="order-table">
                                  <table border="collaspe">
                                      <tr>
                                          <td colspan="2" style="text-align:center;text-transform:uppercase;">Where to pay</td>
                                      </tr>
                                      <tr>
                                          <td><?php if(isset($bill)){ echo $bill;}?></td>
                                          <td><span class="bdt" style="letter-spacing:1px;"><?php if(isset($account)){ echo $account;}?></span></td>
                                      </tr>
                                      <tr>
                                          <td>Amount you will pay</td>
                                          <td><span class="bdt"><?php if(isset($sum_in)){ echo $sum_in;}?></span></td>
                                      </tr>
                                      <tr>
                                          <td>Our contact name</td>
                                          <td>MD SAIFUL ISLAM</td>
                                      </tr>
                                      <tr>
                                          <td>Our contact number</td>
                                          <td>01722565750</td>
                                      </tr>
                                  </table>
                                  <div class="submit">
                                     <p style="font-size:14px; font-weight:normal">Enter transaction ID(TrxID) or Batch Number Here than confirm the transaction</p>
                                      <input type="text" name="trans" placeholder="Transaction ID">
                                      <div><?php 
                                            if(isset($insert)){
                                                echo $insert;
                                            }
                                          ?></div>
                                      <input type="submit" name="confirm" value="Confirm Transaction">
                                  </div> 
                            </form>
                        </div>
                </div>
            </div>
        
            <div class="what-todo">
                <h2>What to do?</h2>
                <ul>
                    <li>1. Pay your amount in rocket number</li>
                    <li>2. Enter the transaction ID </li>
                    <li>3. Now click the confirm transaction button</li>
                </ul>
                <p class="text">If you need help please <a href="contact.php">Contact Us</a></p>
            </div>
        </div>
        
    </div>
</div>






<?php if(file_exists('../footer.php')){
    require_once('../footer.php');
} ?>