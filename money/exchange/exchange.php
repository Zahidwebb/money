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
    if(!exchange()){
            header('location: index.php');
        }
    
?>

      <?php
            if($_SESSION['to'] == 'nog'){
                $account = 'Nogod';
            }else if($_SESSION['to'] == 'bik'){
                $account = 'Bikash';              
            }else if($_SESSION['to'] == 'dbbl'){
                $account = 'DBBL';              
            }else if($_SESSION['to'] == 'net'){
                $account = 'Neteller';              
            }else if($_SESSION['to'] == 'roc'){
                $account = 'Rocket';              
            }else if($_SESSION['to'] == 'pay'){
                $account = 'Payoneer';              
            }else if($_SESSION['to'] == 'skrill'){
                $account = 'Skrill';              
            }else if($_SESSION['to'] == 'web'){
                $account = 'WebMoney';
            }else{
                $account = "Receive";
            }        
        ?>
                 
              
                            <!-- EXCHANGE AREA-->


<div class="exchange-area">
    <div class="middle exmid">
       <div class="exchange-bg">
            <div class="exchange-page">

                      <div class="exchange-text">
                          <div class="text-middle"> 
                           
      <?php
        $rand = $_SESSION['rand'];                    
        if(isset($_POST['exchange'])){
            
            $_SESSION['order'] = 'order';
            
            $email = isset($_POST['email']) ? $_POST['email'] : NULL;
            $acct = isset($_POST['acct']) ? $_POST['acct'] : NULL;
            
            $name = isset($_POST['name']) ? $_POST['name'] : NULL;
            $phone = isset($_POST['phone']) ? $_POST['phone'] : NULL;
            
            if($email == NULL || $acct == NULL || $name == NULL || $phone == NULL){
                $select = "<p class='style small'>Please fill all the input....</p>";
            }else{
                  $_SESSION['email'] = $email;
                  $_SESSION['acct'] = $acct;
                  $_SESSION['nam'] = $name;
                  $_SESSION['phone'] = $phone;
                
                 $query = $connect->query("INSERT INTO transacct VALUES(NULL,'$email','$acct','$name','$phone','$rand')");
                  
                  if($query){
                      header('location: order.php');
                  }else{
                      echo 'Fail';
                  }
            }
        }                        
    ?>
                             <?php if(isset($select)){echo $select;}?>       
                            <form action="exchange.php" method="post">
                                <table class="exchange-table border='1'">

                                    <tr>
                                        <td>
                                           <label for="ee">Your Email</label>
                                            <input type="email" id="ee" name="email" placeholder="Your Email">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                           <label for="nn">Your <?php if(isset($account)){echo $account;} ?> Account</label>
                                            <input type="text" id="nn" name="acct" placeholder="<?php if(isset($account)){echo $account;} ?> Account">
                                        </td>
                                    </tr>
                                    <tr> 
                                        <td>
                                           <label for="cc">Your Name</label>
                                            <input type="text" id="cc" name="name" placeholder="Name">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                           <label for="cn">Your Contact Number</label>
                                            <input type="text" id="cn" placeholder="Contact Number" name="phone">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="submit" name="exchange" value="Exchange"></td>

                                    </tr>
                                </table>
                            </form>
                        </div>
                </div>
            </div>
        
            <div class="what-todo">
                <h2>What to do?</h2>
                <ul>
                    <li>At first go to the input</li>
                </ul>
                <p class="text">If you need help please <a href="contact.php">Contact Us</a></p>
            </div>
        </div>
        
    </div>
</div>






<?php if(file_exists('../footer.php')){
    require_once('../footer.php');
} ?>