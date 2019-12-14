<?php
    if(file_exists('function.php')){
        require_once('function.php'); 
    };
       if(isset($_POST['refresh'])){
           $name = $_POST['name'];
           if($name == NULL){
               echo '';
           }else{
                 $insert = $connect->query("INSERT INTO chat VALUES(NULL,'$name')");
               if($insert){
                   echo "<embed loop='false' src='tone.ogg' hidden='true' autoplay='true'>";
               }
            die();    
           }
                   
       };

    if(isset($_POST['fresh'])){
        
        $chatt = $connect->query("SELECT * FROM chat");
        while($rows = mysqli_fetch_object($chatt)) : ?>
        
        <div class="chatbox"><p class="chatlog"><?php echo $rows->con ?></p></div>
        
        
   <?php  
       
        
 endwhile; }?>



