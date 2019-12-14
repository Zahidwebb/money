<?php

if(file_exists("config.php")){
    require_once("config.php");
}

function email_exists(){
    global $connect;
    global $email;
    $query = $connect->query("SELECT * FROM reg WHERE email = '$email'");
   
    $row = mysqli_num_rows($query);
    
    if($row == 1){
        return true;
    }
    
}


function logged_in(){
    if($_SESSION['success']){
        return true;
    }
}
function exchange(){
    if($_SESSION['exchange']){
        return true;
    }
}

function order(){
    if($_SESSION['order']){
        return true;
    }
}

function confirm(){
    if($_SESSION['confirm']){
        return true;
    }
}

function notice(){
    if($_SESSION['notice']){
        return true;
    }
}

?>