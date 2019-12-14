<?php    
    if(file_exists('header.php')){
        require_once('header.php');
    };   
   if(file_exists('function.php')){
        require_once('function.php');
    }

    if(isset($_POST['reg'])){
        
         $name = $_POST['name'];
         $email = $_POST['email'];
         $phone = $_POST['phone'];
          $pass = $_POST['pass']; 
          $re_pass = $_POST['re-pass'];
        
        
        $error = array();
        
        if($name == NULL){
            $error['name'] = "Name must be filled";
        }
        if($email == NULL){
            $error['email'] = "Email must be filled";
        }
        if($phone == NULL){
            $error['phone'] = "Phone must be filled";
        }
        if($pass == NULL){
             $error['pass'] = "Password must be filled";
        }else if(strlen($pass) <=4){
             $error['pass'] = "Password should not be less than 5 characters";
        }
        if($re_pass == NULL){
             $error['re-pass'] = "Password must be filled";
        }else if(strlen($pass) <=4){
             $error['re-pass'] = "Password should not be less than 5 characters";
        }else if($pass != $re_pass){
            $error['re-pass'] = "Password doesn't match";
        }
        
       
          if(count($error) == 0){
              
            if(!email_exists()){
               $reg_query = $connect->query("INSERT INTO reg VALUES(NULL,'$name','$email','$phone','$pass','$re_pass')");
              if($reg_query){
                  
                  header('location: login.php');
              }else {
                    echo "Query is not right";
                }
            }else{
               $error['email'] = "Email already exists in Database"; 
            }
    }
            
        
    }


?>
       <div class="register-area">
                 <div class="middle">
                 <div class="reg-form">
                  <div class="reg-text">
                       <h2><span>Register</span></h2>
                        <p>Create your account. It's free and only takes a minute</p>
                        <form action="reg.php" method="post" enctype="multipart/form-data" id="myform">
                            <table class="contact-table border='1'">
                                <tr>
                                    <td>
                                       <label for="nam">Name <span>*</span></label>
                                        <input type="text" id="nam" name="name" placeholder="User Name">
                                        <div class="error">
                                            <?php
                                                if(isset($error['name'])){
                                                    echo $error['name'];
                                                }
                                            ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       <label for="ee">Email <span>*</span></label>
                                        <input type="email" name="email" id="ee" placeholder="User Email">
                                        <div class="error">
                                            <?php
                                                if(isset($error['email'])){
                                                    echo $error['email'];
                                                }
                                            ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       <label for="phone">Phone Number <span>*</span></label>
                                        <input type="text" id="phone" name="phone" placeholder="User Phone Number">
                                        <div class="error">
                                            <?php
                                                if(isset($error['phone'])){
                                                    echo $error['phone'];
                                                }
                                            ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       <label for="pass">Password <span>*</span></label>
                                        <input type="password" id="pass" name="pass" placeholder="Password">
                                        <div class="error">
                                            <?php
                                                if(isset($error['pass'])){
                                                    echo $error['pass'];
                                                }
                                            ?>
                                        </div>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>
                                       <label for="re-pass">Re-type Password <span>*</span></label>
                                        <input type="password" id="re-pass" name="re-pass" placeholder="Re-type Password">
                                        <div class="error">
                                            <?php
                                                if(isset($error['re-pass'])){
                                                    echo $error['re-pass'];
                                                }
                                            ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="submit" name="reg" value="Register"></td>
                                </tr>
                                
                            </table>
                        </form>
                        <p class="reg-log">If already have an account? Please <a href="login.php">Log In </a>here</p>
                    </div>
                    </div>
            </div> 
        </div>  
        
    
<?php    
    if(file_exists('footer.php')){
        require_once('footer.php');
    }
?>