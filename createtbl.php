<?php
include "conn.php";
$sql="CREATE TABLE register(email varchar(255),password varchar(255),password1 varchar(255))";
$result=mysqli_query($conn,$sql);
?>