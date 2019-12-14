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
    
    if(!notice()){
            header('location: index.php');
        }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>notice </title>
    <style>
        table {
            border-collapse : collapse;
        }
    </style>
</head>
<body>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor adipisci nemo ipsa quod architecto accusamus id fugiat similique nam, officia, iste optio tenetur unde nihil, iure illo repellat tempore quidem!</p>
    <?php
$row = $connect->query("SELECT trans_info.tid, trans_info.mobileid, trans_info.payorder, trans_info.fee, trans_info.total, trans_info.status, transacct.email, transacct.account, transacct.name, transacct.phone, exch_info.send, exch_info.receive, exch_info.samount, exch_info.ramount FROM exch_info RIGHT JOIN trans_info ON exch_info.txid = trans_info.txid RIGHT JOIN transacct ON exch_info.txid = transacct.txid ORDER BY trans_info.tid DESC"); 

while($show = mysqli_fetch_object($row)) : ?>
  <table border="1">
      <tr>
          <td><?php echo $show->email;?></td>
          <td><?php echo $show->name;?></td>
          <td><?php echo $show->total;?></td>
          <td><?php echo $show->fee;?></td>
          <td><?php echo $show->phone;?></td>
          <td><?php echo $show->payorder;?></td>
          <td><?php echo $show->status;?></td>
          <td><?php echo $show->account;?></td>
          <td><?php echo $show->send;?></td>
          <td><?php echo $show->receive;?></td>
          <td><?php echo $show->samount;?></td>
          <td><?php echo $show->ramount;?></td>
      </tr>
  </table>
    
   <?php endwhile;?>
   
    
</body>
</html>