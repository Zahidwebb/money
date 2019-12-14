<?php    
    ob_start();
    session_start();
    if(file_exists('header.php')){
        require_once('header.php');
    }    
    if(file_exists('function.php')){
        require_once('function.php');
    }

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        
        $error = array();
        if($email == NULL){
            $error['email'] = "Invalid Email";
        }
        if($pass == NULL){
            $error['pass'] = "Wrong Password";
        }
        if(count($error) == 0){
            
            if(email_exists()){
                
                $result = mysqli_query($connect,"SELECT passward FROM reg WHERE email = '$email'");
                $pass_fetch = mysqli_fetch_object($result);
                
                if($pass_fetch->passward == $pass){
                    $_SESSION['success'] = "jkkk";
                     $query = $connect->query("SELECT * FROM reg WHERE email = '$email'");
                        $info = mysqli_fetch_object($query);
                        $_SESSION['name'] = $info->name;
                        $_SESSION['phone'] = $info->phone;
                        $_SESSION['email'] = $info->email;  
                    
                    header('location: exchange/index.php');
                    
                }else{
                   $error['pass'] = "Passward doesn't match";
                }
                
            }else {
                $error['email'] = "<span style='color:red;'>Email doesn't exist in Database</span>";
            }
        }
        
        
    }
    

?>
       <div class="register-area login">
                 <div class="middle">
                 <div class="reg-form">
                  <div class="reg-text log-text">
                      
                       <h2><span>Log In</span></h2>
                        <p>Go to your profile page and get your transaction.</p>
                        <form action="login.php" method="post">
                            <table class="contact-table border='1'">
                                <tr>
                                   
                                    <td>
                                       <label for="ee">Email</label>
                                        <input type="text" id="ee" name="email" placeholder="Email">
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
                                       <label for="pass">Password</label>
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
                                       <a href="#">Forget your password?</a>
                                        <input type="submit" name="login" value="Log In">
                                         
                                    </td>
                                </tr>
                                
                            </table>
                        </form>
                        <p class="reg-log">Don't have an account? Please <a href="reg.php">Register </a>here</p>
                    </div>
                    </div>
            </div> 
        </div>  
<?php    
    if(file_exists('footer.php')){
        require_once('footer.php');
    }
?>