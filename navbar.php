<?php
session_start();
$email1=$_SESSION['AB'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</head>
<body>
<?php
include "conn.php";
$sql="SELECT sum(quantity) as cnt FROM cart WHERE email='$email1'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
  while($row=mysqli_fetch_assoc($result)){
  $total=$row['cnt']; 
}}

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light" >
<h2 style="font-style:Mistral;margin-left:20px;">Coffee<img src="images/mug1.jpg" height="50px" width="50px"></h2>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <b><a class="nav-link" href="home.php" style="margin-left:150px;">HOME </a></b>
      </li>
      <li class="nav-item">
        <b><a class="nav-link" href="product.php">PRODUCTS</a></b>
      </li>
    
      <li class="nav-item">
        <b><a class="nav-link " href="#">ORDERS</a></b>
      </li>
      <li class="nav-item">
        <b><a class="nav-link " href="#">ABOUT US</a></b>
      </li>
      <li class="nav-item">
        <b><a class="nav-link " href="contact.php">CONTACT US</a></b>
      </li>
      <li class="nav-item">
        <b><a class="nav-link " href="login1.php">ADD NEW ITEM</a></b>
      </li>
    </ul>
  </div>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
  <i class="bi bi-person"></i>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
</svg>
  </button>
  <div class="dropdown-menu" style="width:250px;padding:2px 25px 2px 25px;">
    <p>Username:
      <?php 
echo $email1;
      ?></p>
   <a href="login.php"><button type="button"  class="btn" style="background-color:greenyellow;">Login</button></a>
 <a href="register.php"><button type="button" class="btn" style="background-color:greenyellow;">Register</button></a><br>
 <a href="logout.php"><button type="button" class="btn" style="background-color:black;width:150px;color:white;">Logout</button></a>

    </div>
</div>

  

<i class="bi bi-heart"></i>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
  <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
</svg>


<a class="nav-link" href="cart.php">
<label for='icon'>

<i class='bi bi-cart'></i>
<svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-cart' viewBox='0 0 16 16'>
<path d='M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
</svg>
</label>
<b id="cart"><?php echo $total ?></b>

</a>
      </li>
   
    </ul>
  </div>
</nav>
</body>
</html>