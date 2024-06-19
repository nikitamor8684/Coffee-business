<?php
$delete= $_GET['id'];
echo "$delete";
include "conn.php";


$sql="DELETE FROM  cart where id=$delete";


 
        if ($conn->query($sql) === TRUE) {
  header("location:cart.php");
} 

?>