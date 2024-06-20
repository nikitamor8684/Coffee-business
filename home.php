<?php
include "navbar.php";
?>
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
            magrin:0;
            padding:0 10px 0 10px;
            box-sizing:border-box;
            background-color:#F5F5DC;
        }
        .firstbox{background-color:whitesmoke;width:1000px;margin:30px 10px;padding:10px 10px;display:flex;}
        .first{
          margin:20px 20px 10px 10px;height:250px;width:220px;background-color:white;display:inline-block;padding-left:12px;
        }
        .img{
          position:relative;
        }
        .second{background-color:whitesmoke;height:400px;width:1000px;margin:10px;display:flex;flex-direction:row;}
        .box2{height:400px;width:500px;background-color:white;display:inline-block}
        .side{
          position:absolute;
          top:1750px;
          left:60px;
        }
        .sidea{
          font-family:Cursive;
          font-size:30px;
          margin-left:10px;
        }
        .side1{
          position:absolute;
          top:2050px;
          left:100px;
        }
        .side2{
          position:absolute;
          top:2050px;
          left:750px;
        }
        a{
          display:inline-block;
          text-decoration:none;
        }
        .itembox2{height:200px;width:680px;background-color:white;}
        .itembox1{background-color:green;height:120px;width:680px;margin-top:40px;padding:10px 200px;color:white;}
        .showimg{float:left;height:400px;width:450px;background-color:whitesmoke}
        .showimg1{float:right;height:400px;width:450px;background-color:white}
        .logo{background-color:whitesmoke;width:1000px;margin:50px 10px;padding:10px 10px;height:400px;clear:both;}
        .logo1{margin:20px 10px 10px 10px;height:240px;width:200px;background-color:white;display:inline-block;padding-left:12px;}
        .logob{margin-left:15px;color:green;}
        .logop{display:inline-block;}
        .show{background-color:white;height:440px;width:1000px;margin:10px;}
        @media screen and (max-width: 600px) {
          body{
            width:100vw;
          }
          .box1 h4,h1,p{
            clear:both;
            display:none;
          }
          .box1,.box2{
            display:block;
            width:100%
          }
          .carousel{
width:100%;
          }
          .firstbox{
            display:block;
            width:100%;
          }
          .first{
            display:block;
            width:100%;
          }
          .img{width:100%}
          .second{display:block;width:100%}
          .box2 img{display:block;width:100%}
          .side2{display:none;}
    .third,.third1,.third2,.itembox2,.itembox1{display:none;clear:both;width:100vw;height:400px}
    .show{width:10vw}
    .showimg,.showimg1{clear:both;display:block;width:100%;margin-top:20px;}
    .showimg img{width:300px}
    .showimg1 img{width:300px}
    .logo{display:none}
        }
        </style>
</head>
<body>

<div class="main">



<div id="carouselExampleCaptions" class="carousel slide" style="margin-top:15px;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/coffee9.webp" class="d-block w-100" alt="..." height="500px">
      <div class="carousel-caption d-none d-md-block">
        <h5>LOREM IPSUM DOLOR SIT</h5>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
        <button type="button" class="btn btn-secondary">Shop Now</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/coffee6.webp" class="d-block w-100" alt="..." height="500px">
      <div class="carousel-caption d-none d-md-block">
        <h5>LOREM IPSUM DOLOR SIT</h5>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
        <button type="button" class="btn btn-secondary">Shop Now</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/coffee4.webp" class="d-block w-100" alt="..." height="500px">
      <div class="carousel-caption d-none d-md-block">
        <h5>LOREM IPSUM DOLOR SIT</h5>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
        <button type="button" class="btn btn-secondary">Shop Now</button>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


    
    <div class="firstbox">
<div class='first' ><img src="images/chocolate.jpg" height="150px"><p style="display:inline-block;"><b style="margin-left:15px;">Chocolate Coffee</b><br>Lorem ipsum dolor sit </p></div>
<div class='first' ><img src="images/vanilla.jpg" height="150px">  <p style="display:inline-block;"><b style="margin-left:15px;">Vanilla Coffee</b><br>Lorem ipsum dolor sit </p></div>
<div  class='first' ><img src="images/coconut.jpg" height="150px" ><br><p style="display:inline-block;"><b style="margin-left:15px;">Coconut Coffee</b><br>Lorem ipsum dolor sit </p></div>
<div  class='first' ><img src="images/hazelnut.jpg" height="150px" ><br><p style="display:inline-block;"><b style="margin-left:15px;">    Hazulnet Coffee</b><br>Lorem ipsum dolor sit </p></div>
</div>

<div class='second'>
<div class="box2" >
  <img src="images/coffee5.webp" height="400px" width="450px">
      </div>
<div class="box1" style="height:400px;width:500px; background-color:white;"  >
   <h4 style="margin-right:200px;color:chocolate;">Healthy Coffee</h4> 
<h1  style="margin-right:300px;">Save up to 50% off</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, quisquam <br>
elit. Neque, quisquam </p> 
      </div>
    </div>


      
    <div style="background-color:white;height:400px;clear:both;width:1000px" class='third'>
      <div style="background-color:white;height:400px;float:left;width:300px;" class='third1'>
<div style="background-color:white;height:400px;width:300px;" class="img itembox" ><img src="images/beans.webp" height="400px" width="300px"></div>
<div style="background-color:green;color:white;height:100px;width:250px;" class="side"><b class="sidea">Natural coffee</b><p style="margin-left:30px;">Get 35% off</p></div>
</div>
<div>
<div style="height:400px;background-color:white;float:right;width:680px;margin-left:20px" class='third2'>
<div style="" class="itembox2">
  <img src="images/coffee8.webp" height="200px" width="680px">
</div>
<div style="" class="itembox1">
  <h2>A cup of coffee gives you a lot of happiness</h2>
</div>
</div>
</div>     
      </div>


      <div style="clear:both;margin-top:100px;">
      <div style="" class="show">
<span  class="showimg">
<img src="images/coffee2.webp" height="400px" width="450px" >
</span>
<div style="color:white;height:100px;width:250px;" class="side1">
  <b style="margin-left:10px;">BIG OFFERS <br> <h2>Get 15% off</h2></b><br><button class="btn  btn-secondary">Shop Now</button>
</div>
<span   class="showimg1">
<div style="height:100px;width:450px;background-color:whitesmoke;">
  <img src="images/coffee3.webp" height="400px" width="450px" >
</div>
<div style="color:white;height:100px;width:250px;" class="side2"><b style="margin-left:30px;">New In Taste <br><h2>Coffee House</h2></b><br><button class="btn  btn-secondary">Shop Now</button></div>
</span>
    </div> 
      </div>


      <?php

include "conn.php";
$sql = "SELECT * FROM item_list";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        echo "<form action='' method='post'>";
        echo '<div class="grid grid-cols-2 md:grid-cols-3 gap-4">';
        echo '<div class="itembox overflow-hidden" style="height:350px;float:left;margin-left:40px;margin-top:100px;">';
      echo "<img src=". $row['photo']." height='290px' width='290px' name='photo'><br>";
      echo "<p name='cost'>&#x20B9 ".$row['cost']."</p>";
      echo "<a href=addcart.php?id=".$row['id']."&name=".$row['name'].">";
      echo "<label for='icon'>";
      echo "<i class='bi bi-cart'></i>";
      echo "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-cart' viewBox='0 0 16 16'>
  <path d='M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
</svg></label>";
      echo"</a><br>";
         
      echo "</div></div>";
    
      echo "</form>";
    }
}
?>


      <div  class="logo">
<div style="" class="logo1">
<i class="bi bi-piggy-bank-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor" class="bi bi-piggy-bank-fill" viewBox="0 0 16 16">
  <path d="M7.964 1.527c-2.977 0-5.571 1.704-6.32 4.125h-.55A1 1 0 0 0 .11 6.824l.254 1.46a1.5 1.5 0 0 0 1.478 1.243h.263c.3.513.688.978 1.145 1.382l-.729 2.477a.5.5 0 0 0 .48.641h2a.5.5 0 0 0 .471-.332l.482-1.351c.635.173 1.31.267 2.011.267.707 0 1.388-.095 2.028-.272l.543 1.372a.5.5 0 0 0 .465.316h2a.5.5 0 0 0 .478-.645l-.761-2.506C13.81 9.895 14.5 8.559 14.5 7.069c0-.145-.007-.29-.02-.431.261-.11.508-.266.705-.444.315.306.815.306.815-.417 0 .223-.5.223-.461-.026a.95.95 0 0 0 .09-.255.7.7 0 0 0-.202-.645.58.58 0 0 0-.707-.098.735.735 0 0 0-.375.562c-.024.243.082.48.32.654a2.112 2.112 0 0 1-.259.153c-.534-2.664-3.284-4.595-6.442-4.595Zm7.173 3.876a.565.565 0 0 1-.098.21.704.704 0 0 1-.044-.025c-.146-.09-.157-.175-.152-.223a.236.236 0 0 1 .117-.173c.049-.027.08-.021.113.012a.202.202 0 0 1 .064.199Zm-8.999-.65a.5.5 0 1 1-.276-.96A7.613 7.613 0 0 1 7.964 3.5c.763 0 1.497.11 2.18.315a.5.5 0 1 1-.287.958A6.602 6.602 0 0 0 7.964 4.5c-.64 0-1.255.09-1.826.254ZM5 6.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"/>
</svg>
<p style="" class="logop"><b style="" class="logob">Great Savings</b><br>Save  big every order </p>
</div>
<div style="" class="logo1">
<i class="bi bi-chat-left-text-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor" class="bi bi-chat-left-text-fill" viewBox="0 0 16 16">
  <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
</svg>
<br><p style="" class="logop"><b style="" class="logob">24*7 support</b><br>one-on-one support</p>
</div>
<div style="" class="logo1">
<i class="bi bi-gift"></i><br><p class="logop"><svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor" class="bi bi-gift" viewBox="0 0 16 16">
  <path d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z"/>
</svg>
<br><p style="" class="logop"><b style="" class="logob">Gift vouchers</b><br>Vouchers on every festival</p></div>
<div style="" class="logo1">
<i class="bi bi-truck"></i><svg xmlns="http://www.w3.org/2000/svg" width="140" height="140" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
  <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
</svg>
<br><p style="" class="logop"><b style="" class="logob">Worldwide delivery</b><br>Dropship worldwide</p>
</div>
</div>

<?php
include "footer.php";
?>
</body>
</html>