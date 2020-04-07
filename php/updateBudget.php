<?php
  header("Access-Control-Allow-Origin: *");
  $con=mysqli_connect("localhost:3306","root","","budgetapp");
  $category=$_POST["category"];
  $amount=$_POST["amount"];
  $sql="UPDATE budget SET $category = $amount WHERE budgetId=1; ";
  if ($con->query($sql)===True){
    echo "Updated";
  }
  else{
    echo "something wrong";
  }
?>
