<?php
header("Access-Control-Allow-Origin: *");
$con=mysqli_connect("localhost:3306","root","","budgetapp");
$category= $_POST["category"];
$itemname=$_POST["Items"];
$amount=$_POST["Amount"];
$sql="INSERT INTO spendingentry (category,itemname,amount) VALUES ('$category','$itemname','$amount')";
if ($con->query($sql)===TRUE){
  header("Location: ./dashboard.php");
    exit;
}
else{

  }

 ?>
