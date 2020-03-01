<?php
header("Access-Control-Allow-Origin: *");
$con=mysqli_connect("localhost","root","","budgetapp");
$category= $_POST["category"];
$itemname=$_POST["Items"];
$amount=$_POST["Amount"];
$sql="INSERT INTO spendingentry (category,itemname,amount) VALUES ('$category','$itemname','$amount')";

if ($con->query($sql)===TRUE){
  echo "SUccess";
}
else{
  echo "$sql";
}

 ?>
