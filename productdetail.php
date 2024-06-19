<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .star{
            height:20px;
        }
        .btn{
border:1px solid white;
border-radius:50%;
height:40px;
        }
        .bi-cart{
      display:inline-block;
      color:green;
      height:40px;
      width:40px;
    }
        </style>
</head>
<body>
   <?php
   include "navbar.php";
   include "conn.php";
   $id=$_GET['id'];
   $sql="SELECT * FROM item_list WHERE id='$id'";
   $result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
    echo "<div style='margin-top:200px;height:500px;width:1000px;background-color:whitesmoke;margin-left:300px;'>
    <div style='height:400px;width:300px;float:left;background-color:white;'>
<img src=".$row['photo']." height='400px' width='400px'>
    </div>
    <div style='height:400px;width:500px;float:right;'>
<h2>".$row['name']." flavour coffee</h2>
<svg fill='currentColor' class='star' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' class='w-4 h-4 text-indigo-500' viewBox='0 0 24 24'>
<path d='M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z'></path>
</svg>
<svg fill='currentColor' class='star' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' class='w-4 h-4 text-indigo-500' viewBox='0 0 24 24'>
<path d='M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z'></path>
</svg>
<svg fill='currentColor' class='star' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' class='w-4 h-4 text-indigo-500' viewBox='0 0 24 24'>
<path d='M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z'></path>
</svg>
<svg fill='currentColor' class='star' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' class='w-4 h-4 text-indigo-500' viewBox='0 0 24 24'>
<path d='M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z'></path>
</svg>
<svg fill='none'class='star' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' class='w-4 h-4 text-indigo-500' viewBox='0 0 24 24'>
<path d='M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z'></path>
</svg>
<span class='text-gray-600 ml-3'>4 Reviews</span>
</span>
<svg fill='currentColor' class='star' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' class='w-5 h-5' viewBox='0 0 24 24'>
<path d='M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z'></path>
</svg>
<svg fill='currentColor' class='star' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' class='w-5 h-5' viewBox='0 0 24 24'>
<path d='M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z'></path>
</svg>
<svg fill='currentColor' class='star' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' class='w-5 h-1' viewBox='0 0 24 24'>
  <path d='M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z'></path>
</svg>
<p class='leading-relaxed'>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, nemo earum, molestiae, ipsum dicta officiis est veritatis quidem distinctio porro sapiente quasi commodi. Amet sed itaque officiis rem doloribus reiciendis.</p>
<div class='flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5'>
<div class='flex'>
  <span class='mr-3'>Color</span>
  <button class='btn btn-secondary'></button>
  <button class='btn btn-primary'></button>
  <button class='btn btn-success'></button>
</div>
<div class='flex'>
<b style='font-size:25px;'>Rs. ".$row['cost']."</b>";
echo "<a href=addcart.php?id=".$row['id']."&name=".$row['name'].">
";
echo "<label for='icon'>";
echo "<i class='bi bi-cart'></i>";
echo "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-cart' viewBox='0 0 16 16'>
<path d='M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
</svg></label></a>";
echo "</div>";
    echo "</div>";
    
    }
}
        ?>

   
</body>
</html>