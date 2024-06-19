<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
               body{
            margin:0;
            padding:0px 400px;
            background-color:#F5F5DC;
        }
        .insert{
            height:650px;
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

<div class="insert">
<img src="images/leaves.jpg" height="100px" style="margin-left:250px;">
  <p style="margin-left:180px;"><font size="6">ADD NEW ITEM</font></p> 
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos earum iusto quos quis</p>
    <form action="" method="post" enctype="multipart/form-data">
<div class="mb-3">
    <label for="name" class="form-label">Enter item name</label>
    <input type="name" class="form-control" id="name" aria-describedby="emailHelp" name="name">
    
  </div>
  <div class="mb-3">
    <label for="cost" class="form-label">Cost</label>
    <input type="text" class="form-control" id="cost" name="cost">
  </div>
  
  <div class="mb-3 form-check">
      <label class="photo" for="exampleCheck1">Photo</label>
      <input type="file" class="form-control" id="photo" name="photo">
  </div>
  <div class="mb-3">
    <label for="detail" class="form-label">Detail</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="detail">
  </div>
 
  <input type="submit" class="btn btn-secondary" value="submit">
</form>
    </div> 
    <?php
    include "conn.php";
    $target_file=$photo=" ";
if($_SERVER['REQUEST_METHOD']=='POST'){
 
    $name=$_POST['name'];
    $cost=$_POST['cost'];
    $photo=$_POST['photo'];
    $detail=$_POST['detail'];
    $target_file = $target_dir.basename($_FILES["photo"]["name"]);
    move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
    $sql="INSERT INTO item_list(name,cost,photo,detail) values('$name','$cost','$target_file','$detail')";
    $result=mysqli_query($conn,$sql);
}

?>
</body>
</html>