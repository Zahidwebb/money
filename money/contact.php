<?php require_once('header.php');
    
    if(file_exists('config.php')){
        require_once('config.php');
    };

        if(isset($_POST['sub'])){
            
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $msg = $_POST['msg'];
            
            if(empty($name) || empty($email) || empty($subject) || empty($msg)){
                $error = "<div class='wrong'>Please fill up all fields!</div>";
            }else {
                
                    $query = $connect->query("INSERT INTO contact VALUES(NULL,'$name','$email','$subject','$msg')");
                    if($query){
                        $success = "<div class='success'>You have submited succesfully....</div>";
                    }
                }
            }

?>

<div class="contact-area">
    <div class="middle">
        <div class="contact-page">
            <div class="contact-float">
                <div class="float-text">
                    <h2>Request a call back</h2>
                    <hr>
                    <br>
                    <hr class="small">
                </div>
                <div class="contact-list">
                   <div class="contact-address">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="contact-detail">
                            <p>Call Us</p>
                            <p>01303192803</p>
                        </div>
                    </div>
                    <div class="contact-address">
                        <div class="contact-icon">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="contact-detail">
                            <p>Email Address</p>
                            <p>arefenraz@gmail.com</p>
                        </div>
                    </div>
                    <div class="contact-address">
                        <div class="contact-icon">
                          <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-detail">
                            <p>Address</p>
                            <p>Road-2/212,Block-D,Mirpur-10</p>
                        </div>
                    </div>
                </div>
            </div>
                <div class="contact-form">
                  <div class="contact-text">
                       <h2>Contact Us</h2>
                        <hr>
                         <br>
                        <hr class="small">
                        <form action="contact.php" method="post">
                            <table class="contact-table border='1'">
                               <tr>
                                   
                                        <?php 
                                            if(isset($error)){
                                                echo $error;
                                            }
                                        ?>
                        
                                       
                                        <?php 
                                            if(isset($success)){
                                                echo $success;
                                            }
                                        ?>
                                    
                               </tr>
                                <tr>
                                    <td>
                                        <input type="text" name="name" placeholder="Name">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="email" name="email" placeholder="Email">
                                    </td>
                                </tr>
                                <tr>
                                    
                                    <td>
                                        <input type="text" name="subject" placeholder="Subject">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <textarea name="msg" id="" cols="25" rows="7" placeholder="Enter Message"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="submit" name="sub" value="Submit"></td>
                                    
                                </tr>
                            </table>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>






<?php require_once('footer.php') ?>