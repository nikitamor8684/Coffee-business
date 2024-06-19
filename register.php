<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <style>
        body{
            margin:0;
            padding:0px 140px;
            background-color:#F5F5DC;
        }
        .register{
            height:100vh;
            width:800px;
            background-color:white;
            PADDING:10PX 60PX;
            margin-top:50px;
        }
        .btn-secondary{
            width:400px;
        }
        </style>
</head>
<body>
    <?php
    include "conn.php";
    if($_SERVER['REQUEST_METHOD']=='POST'){
$email=$_POST['email'];
$pass=$_POST['pass'];
$pass1=$_POST['pass1'];
if($pass!=$pass1){
    echo "<span style='color:red'>password not correct</span>";
}
else{
$sql1="SELECT * FROM register WHERE email='$email' AND password='$pass'";
$result1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result1)>0){
    header('location:login.php');   
}
else{
$sql="INSERT INTO register values('$email','$pass','$pass1')";
$result=mysqli_query($conn,$sql);
if($result){
    header('location:login.php');
}
}
}
    }
    ?>
  <div class="register">
  <img src="images/leaves.jpg" height="100px" style="margin-left:250px;">
  <p style="margin-left:180px;"><font size="6">REGISTER NOW</font></p> 
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos earum iusto quos quis</p>
  <form method="post">
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Enter Password</label>
    <input type="password" class="form-control" id="password" aria-describedby="emailHelp" name="pass">
  </div>
  <div class="mb-3">
    <label for="password1" class="form-label">Confirm Password</label>
    <input type="password1" class="form-control" id="password1" aria-describedby="emailHelp" name="pass1">
  </div>
  <button type="submit" class="btn btn-secondary">Register Now</button>
</form>
</div>  
</body>
</html>