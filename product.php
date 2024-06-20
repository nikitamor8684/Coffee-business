<?php
include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <style>
    body{
      margin:10px;
    }
    .bi-cart{
      display:inline-block;
      color:green;
      height:40px;
      width:40px;
    }
    .star{
      height:20px;
      color:#d4af37; 
    }
    .itembox{}
    @media screen and (max-width: 600px) {
      .itembox{width:100vw;clear:both;margin:10px 0px}
    }
    </style>
</head>
<body>
<div class="mostsearched" style="margin-top:100px;">
  <h3>The most searched cars</h3>
  <div class="mst1">
    <button onclick="chng('All')" id="btn1" class="btn" value="All">All</button>
    <button onclick="chng('Chocolate')" id="btn2" class="btn" value="Chocolate">Chocolate</button>
    <button onclick="chng('Coconut')" id="btn3" class="btn" value="Coconut">Coconut</button>
    <button onclick="chng('Hazelnut')"  id="btn4" class="btn" value="Hazelnut">Hazelnut</button>
    <button onclick="chng('Vanilla')" id="btn5" class="btn" value="Vanilla">Vanilla</button>
</div> 

<?php

include "conn.php";
$sql = "SELECT * FROM item_list";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo '<div class="grid grid-cols-2 md:grid-cols-3 gap-4">';
  while($row = $result->fetch_assoc()) {

    echo '<div href="#" class="All '.$row['name'].'>;

        <div class="itembox overflow-hidden" style="height:400px;float:left;width:400px;margin-left:70px;background-color:whitesmoke;">';
        echo '<a href=productdetail.php?id='.$row['id'].'&name='.$row['name'].'>
            <img class="h-auto  rounded-lg" src="'.$row['photo'].'" alt="" style="height:450px;width:400px;"></a>';
            echo "<b name='cost'>&#x20B9 ".$row['cost']."</b>";
            echo "<span><a href=addcart.php?id=".$row['id']."&name=".$row['name'].">";
            echo "<label for='icon'>";
            echo "<i class='bi bi-cart'></i>";
            echo "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-cart' viewBox='0 0 16 16'>
        <path d='M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
      </svg></label></a></span>
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
<p style='margin-left:30px;font-size:30px;font-weight:bold;'>".$row['name']." flavour</p>
      ";
          
        echo '</div></div>';
    
    
}
echo '</div>';
} 

?>
<?php
include "footer.php";
?>
</body>
</html>
<script>

function chng(x) {
    $(".All").hide();
    $("."+x).show();
  }

</script>