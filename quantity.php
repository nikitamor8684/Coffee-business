<?php
include "conn.php";
session_start();
$email1=$_SESSION['AB'];
if(isset($_POST['qty'])){
    $qty=$_POST['qty'];
    $id=$_POST['id'];
$sql="UPDATE cart SET quantity='$qty' WHERE id='$id' AND email='$email1'";
$result=mysqli_query($conn,$sql);
$sql1="SELECT sum(quantity) as cnt FROM cart WHERE email='$email1'";
$result1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result1)>0){
  while($row=mysqli_fetch_assoc($result1)){
  $total=$row['cnt'];
 echo $total; 
}}
}
?>