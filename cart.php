<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>  
             
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@0.7.4/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .card{
            height:350px;
            width:1000px;
            background-color:#013B45;
            margin-top:20px ; 
            color:white;
        }
      button{
background-color:red;
border:1px solid red;
border-radius:20px;
      }
      .box2{
        float:right;
      }
      #cart{
margin-top:50px;        
height:300px;
width:430px;
border:2px solid black;
border-radius:10px;
      }
      
        </style>
</head>
<body>



<?php
include "conn.php";
include "navbar.php";
$email1=$_SESSION['AB'];
$sql2 = "SELECT * FROM cart WHERE email='$email1'";
$result2 = mysqli_query($conn,$sql2);

if(mysqli_num_rows($result2)>0){
    while($row=mysqli_fetch_assoc($result2)){
        // echo "<div class='card' style='width: 40rem;'>";

        // echo "<div class='card-body'>";
    
          echo '<div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-16 my-12">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
                <th scope="col" class="px-6 py-3">
                    Product Image
                </th>
                <th scope="col" class="px-6 py-3">
                Product name
                </th>
                <th scope="col" class="px-6 py-3">
                    Product Qty
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Total
                </th>
                <th scope="col" class="px-6 py-3">
                    Delete
                </th>
            </tr>
            </thead>
        <tbody>';
        $id=$row['id'];
        $cost=$row['cost'];
        $photo=$row['photo'];
        $sql4="SELECT quantity FROM cart WHERE id='$id'";
        $result4=mysqli_query($conn,$sql4);
        if(mysqli_num_rows($result4)>0){
          while($row1=mysqli_fetch_assoc($result4)){
$value=$row1['quantity'];
          }
        }
       echo '<tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700" id="deleteid12">';
       echo '<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">';
       echo '<a href="product.php?id=2">';
       echo "<img src=". $row['photo']." height='200px' width='200px' name='photo'>";
       echo '</a>';
       echo ' </th>';
       echo "<td class='px-6 py-4 ' >".$row['name']."</td>";
        echo "<td class='px-6 py-4'>
            <input type='number'  style='border:2px solid gray;width:100px;border-radius:10px;' class='qty'  onChange=func(this.value,".$id.",".$cost.") value='$value'  minlength='1'>
        </td>";
        echo "<td class='px-6 py-4 cost' name='cost'>".$row['cost']."</td>";
        echo '<td class="px-6 py-4 subtotal"> </td>';
        echo "<td class='px-6 py-4'>";
        echo "<a href='delete.php?id=$id'>";
        echo "<button  class='font-medium text-blue-600 dark:text-blue-500 hover:text-blue-800'><i class='bi bi-trash'></i>";
       echo "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
        <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z'/>
        <path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z'/>
      </svg></button>
        </a>
        </td>";
     echo '</tr>';
        
        
        
     
        
    //     echo"<p>".$row['id']."</p>";
    //     echo "<p>".$row['name']."</p>";
    //     echo "<span name='cost' class='cost'>".$row['cost']."</span>";
        
    //     echo "<div class='box2'><img src=". $row['photo']." height='200px' width='200px' name='photo'></div><br>";
    //     echo "<input type='number' class='qty'  onChange=func(this.value,$id,$cost)  value='$value' min='1'>";
    //     echo "<p>Subtotal<b class='subtotal'></b></p>";
    //     echo"<button>Save for later</button>";
    //     echo "<a href='delete.php?id=$id'>";
    //     echo "<button>remove</button>";
    //     echo "</a>";
    //   echo "</div>";
    //  echo "</div>";
     
    }
    echo '</tbody>
    </table>
</div>';
    
}


       ?>

</table>
<div>
<h3>CART TOTALS</h3>
<table border="1" cellspacing="0" cellpadding="0" height="200px" width="400px" style="margin-bottom:40px">
  <tr>
    <td>Cart Subtotal </td>
    <td>
      <?php
$sql3="SELECT SUM(subtotal) as total from cart";
$result3=mysqli_query($conn,$sql3);
if(mysqli_num_rows($result3)>0){
  while($row=mysqli_fetch_assoc($result3)){
  $total=$row['total'];

}
}
      ?>
<b id="subtotal"></b>
    </td>
</tr>
<tr>
  <td>Shipping</td>
<td>Free</td>
</tr>
<tr>
  <th>Total</th>
  <th id='subtotal1'></th>
</tr>

</table>
</div>


<script>
  function func(x,y,z){
 
    $.ajax({
type:"POST",
url:"quantity.php",
data:{
  qty:x,
  id:y
},
datatype:"JSON",
success:function(response){
$("#cart").html(response);

$.ajax({
type:"POST",
url:"cost.php",
data:{
  qty:x,
  id:y,
  price:z
},
success:function(response1){
  $("#subtotal").html(response1);
   $("#subtotal1").html(response1);
  console.log(response1);
}
});

}
});

let price=document.getElementsByClassName("cost");
//console.log(price.length);
let qty=document.getElementsByClassName("qty");
let subtotal=document.getElementsByClassName("subtotal");
for(i=0;i<=price.length;i++){
console.log(price[i].innerHTML*qty[i].value);
  subtotal[i].innerHTML=(price[i].innerHTML*qty[i].value);
  
  // total+=subtotal[i];
  // console.log(total);
}
}

  </script>
  <?php
include "footer.php";
  ?>
</body>
</html>