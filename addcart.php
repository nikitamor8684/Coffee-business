
   <?php  
   session_start();
   $email1=$_SESSION['AB'];
   include "conn.php";
   $id=$_GET['id'];
   $sql="SELECT * FROM item_list WHERE id='$id'";
   $result=mysqli_query($conn,$sql);
   if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $name=$row['name'];
        $photo=$row['photo'];
        $detail=$row['detail'];
        $cost=$row['cost'];
        $sql1="INSERT INTO cart(id,name,photo,cost,email) values('$id','$name','$photo','$cost','$email1')";
        $result1=mysqli_query($conn,$sql1);
    }
    header('location:cart.php');
   }
   ?>
