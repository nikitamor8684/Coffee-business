<?php
 session_start();
 $email1=$_SESSION['AB'];
include "conn.php";
if(isset($_POST['qty'])){
    $qty=$_POST['qty'];
    $id=$_POST['id'];
    $price=$_POST['price'];
    $cost=$price*$qty;


$sql3="UPDATE cart SET subtotal='$cost' WHERE id='$id' AND email='$email1'";
$result3=mysqli_query($conn,$sql3);
$sql1="SELECT sum(subtotal) as total_cost FROM cart WHERE email='$email1'";
$result1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result1)>0){
  while($row=mysqli_fetch_assoc($result1)){
  $total_cost=$row['total_cost'];
 echo $total_cost;
}}
}
?>