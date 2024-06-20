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
            height:100vh;
        }
        .login{
            height:650px;
            width:800px;
            background-color:white;
            PADDING:10PX 60PX;
            margin-top:50px;
        }
        .btn-secondary{
            width:400px;
        }.p{margin-left:180px;}
        img{margin-left:250px;}
        @media screen and (max-width: 600px) {
            body{padding:0px}
            .login{margin:0px;height:100vh;width:100vw}
            img{margin-left:100px}
            .p{margin-left:40px;}
            .btn-secondary{
            width:200px;
        }
        }
        
        </style>
</head>
<body>
<?php
    include "conn.php";
    if($_SERVER['REQUEST_METHOD']=='POST'){
$email=$_POST['email'];
$pass=$_POST['pass']; 
$sql="SELECT * FROM admin WHERE email='$email' AND password='$pass'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    header('location:insert.php');
}
else{
    echo "<span style='color:red'>Incorrect email or parrword</span>"; 
}
    }
?>
  <div class="login">
  <img src="images/leaves.jpg" height="100px">
  <p style="" class="p"><font size="6">LOGIN NOW</font></p> 
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
  <button type="submit" class="btn btn-secondary">LOGIN Now</button>
</form>
</div>  


</body>
</html>