<?php
    ob_start();
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

    if(!order()){
            header('location: index.php');
        }
    
    $email = $_SESSION['email'];
    $name = $_SESSION['nam'];
    $acct = $_SESSION['acct'];
    $phone = $_SESSION['phone'];
    $samount = $_SESSION['samount'];
    $ramount = $_SESSION['ramount'];
?>
 <?php
            if($_SESSION['to'] == 'nog'){
                $to = 'Nogod.BDT';
            }else if($_SESSION['to'] == 'bik'){
                $to = 'Bikash.BDT';              
            }else if($_SESSION['to'] == 'dbbl'){
                $to = 'DBBL Bank BDT';              
            }else if($_SESSION['to'] == 'net'){
                $to = 'Neteller.USD';              
            }else if($_SESSION['to'] == 'roc'){
                $to = 'Rocket.BDT';              
            }else if($_SESSION['to'] == 'pay'){
                $to = 'Payoneer.USD';              
            }else if($_SESSION['to'] == 'skrill'){
                $to = 'Skrill.USD';              
            }else if($_SESSION['to'] == 'web'){
                $to = 'WebMoney.USD';
            }else{
                $to = "Receive";
            }        
        ?>

 <?php
            if($_SESSION['from'] == 'nog'){
                $from = 'Nogod.BDT';
            }else if($_SESSION['from'] == 'bik'){
                $from = 'Bikash.BDT';              
            }else if($_SESSION['from'] == 'dbbl'){
                $from = 'DBBL Bank BDT';              
            }else if($_SESSION['from'] == 'bik-a'){
                $from = 'Bikash Agend BDT';              
            }else if($_SESSION['from'] == 'net'){
                $from = 'Neteller.USD';              
            }else if($_SESSION['from'] == 'roc'){
                $from = 'Rocket.BDT';              
            }else if($_SESSION['from'] == 'pay'){
                $from = 'Payoneer.USD';              
            }else if($_SESSION['from'] == 'skrill'){
                $from = 'Skrill.USD';              
            }else if($_SESSION['from'] == 'web'){
                $from = 'WebMoney.USD';
            }else{
                $from = "Send";
            }        
        ?>
 <?php
            if($_SESSION['to'] == 'nog'){
                $account = 'Nogod';
                $taka_to = 'BDT';
            }else if($_SESSION['to'] == 'bik'){
                $account = 'Bikash';  
                $taka_to = 'BDT';
            }else if($_SESSION['to'] == 'dbbl'){
                $account = 'DBBL'; 
                $taka_to = 'BDT';
            }else if($_SESSION['to'] == 'net'){
                $account = 'Neteller';
                $taka_to = 'USD';
            }else if($_SESSION['to'] == 'roc'){
                $account = 'Rocket';  
                $taka_to = 'BDT';
            }else if($_SESSION['to'] == 'pay'){
                $account = 'Payoneer'; 
                $taka_to = 'USD';
            }else if($_SESSION['to'] == 'skrill'){
                $account = 'Skrill';  
                $taka_to = 'USD';
            }else if($_SESSION['to'] == 'web'){
                $account = 'WebMoney';
                $taka_to = 'USD';
            }else{
                $account = "Receive";
            }        
        ?>
 <?php
            if($_SESSION['from'] == 'nog'){
                $acct_from = 'Nogod';
                $taka = ' BDT';
                $fee = 1.6.'%';
                $token = 1.6/100;
                $total = $samount * $token;
                $sum = round($total + $samount);
            }else if($_SESSION['from'] == 'bik'){
                $acct_from = 'Bikash'; 
                $taka = ' BDT';
                $fee = 1.6.'%';
                $token = 1.6/100;
                $total = $samount * $token;
                $sum = round($total + $samount);
            }else if($_SESSION['from'] == 'roc'){
                $acct_from = 'Rocket'; 
                $taka = ' BDT';
                $fee = 1.6.'%';
                $token = 1.6/100;
                $total = $samount * $token;
                $sum = round($total + $samount);
            }else if($_SESSION['from'] == 'dbbl'){
                $acct_from = 'DBBL';  
                $taka = ' BDT';
                $fee = 1.6.'%';
                $token = 1.6/100;
                $total = $samount * $token;
                $sum = round($total + $samount);
            }else if($_SESSION['from'] == 'pay'){
                $acct_from = 'Payoneer'; 
                $fee = 0.88.'%';
                $token = 0.88/100;
                $total = $samount * $token;
                $sum = round($total + $samount);
                $taka = ' USD';
            }else if($_SESSION['from'] == 'skrill'){
                $acct_from = 'Skrill'; 
                $fee = 0.88.'%';
                $token = 0.88/100;
                $total = $samount * $token;
                $sum = round($total + $samount);
                $taka = ' USD';
            }else if($_SESSION['from'] == 'web'){
                $acct_from = 'WebMoney';
                $fee = 0.88.'%';
                $token = 0.88/100;
                $total = $samount * $token;
                $sum = round($total + $samount);
                $taka = ' USD';
            }else if($_SESSION['from'] == 'net'){
                $acct_from = 'Neteller';
                $fee = 0.88.'%';
                $token = 0.88/100;
                $total = $samount * $token;
                 $sum = round($total + $samount);
                $taka = ' USD';
            }else{
                $acct_from = "Receive";
                $fee = 0.88.'%';
                $token = 0.88/100;
                $total = $samount * $token;
                $sum = round($total + $samount);
            }       
        ?>
        
       
        
       

<div class="exchange-area order-area">
    <div class="middle exmid">
       <div class="exchange-bg">
            <div class="exchange-page">
                    
        <?php 
                $pay_order = rand(100,999).'A'.rand(999,9999).'D';
                
                $_SESSION['payorder'] = $pay_order;
                 $_SESSION['fee'] = $fee;
                $_SESSION['sum'] = $sum;
                $_SESSION['taka'] = $taka;
                
            if(isset($_POST['order'])){
                $_SESSION['confirm'] = 'confirm';
               header('location: confirm.php'); 
            }else if(isset($_POST['cancel'])){
                header('location: index.php');
            };
        ?>        
                    
                      <div class="exchange-text">
                          <div class="text-middle"> 
                            <form action="order.php" method="post" class="order-table">
                                 <p>Pay order : <?php if(isset($pay_order)){echo $pay_order;} ?></p>
                                  <table border="collaspe">
                                      <tr>
                                          <td>From :</td>
                                          <td><?php if(isset($from)){echo $from;} ?></td>
                                          <td>Amount :  <span class="taka"><?php if(isset($samount)){echo $samount;} ?></span> <?php if(isset($taka)){echo $taka;} ?></td>
                                      </tr>
                                      <tr>
                                          <td>To : </td>
                                          <td><?php if(isset($to)){echo $to;} ?></td>
                                          <td>Amount : <span class="taka"><?php if(isset($ramount)){echo $ramount;} ?></span> <?php if(isset($taka_to)){echo $taka_to;} ?></td>
                                      </tr>
                                      <tr>
                                          <td>Your email address</td>
                                          <td><?php if(isset($email)){echo $email;} ?></td>
                                          <td rowspan="4"></td>
                                      </tr>
                                      <tr>
                                          <td><?php if(isset($account)){echo $account;} ?> account </td>
                                          <td><?php if(isset($acct)){echo $acct;} ?></td>
                                          
                                      </tr>
                                      <tr>
                                          <td>Contact name</td>
                                          <td><?php if(isset($name)){echo $name;} ?></td>
                                          
                                      </tr>
                                      <tr>
                                          <td>Contact number</td>
                                          <td><?php if(isset($phone)){echo $phone;} ?></td>
                                          
                                      </tr>
                                      <tr>
                                          <td colspan="2"><?php if(isset($acct_from)){echo $acct_from;} ?> personal fee</td>
                                          <td style="text-align:right"><span class="taka"><?php if(isset($fee)){echo $fee;} ?></span><span style="margin-left:5px;"><?php if(isset($taka)){echo $taka;} ?></span></td>
                                      </tr>
                                      <tr>
                                          <td colspan="2">Total for payment</td>
                                          <td style="text-align:right"><span class="taka"><?php if(isset($sum)){echo $sum;} ?></span> <?php if(isset($taka)){echo $taka;} ?></td>
                                      </tr>
                                  </table>
                                  <div class="submit">
                                      <input type="submit" value="Pay Order" name="order">
                                      <button name="cancel">Cancel</button>
                                  </div> 
                            </form>
                        </div>
                </div>
            </div>
        
            <div class="what-todo">
                <h2>What to do?</h2>
                <ul>
                    <li>1. Check your details carefully and click pay order button</li>
                    <li>2. If found anything wrong, please canel order and try again</li>
                </ul>
                <p class="text">If you need help please <a href="contact.php">Contact Us</a></p>
            </div>
        </div>
        
    </div>
</div>






<?php if(file_exists('../footer.php')){
    require_once('../footer.php');
} ?>