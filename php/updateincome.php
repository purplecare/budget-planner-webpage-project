<?php
  header("Access-Control-Allow-Origin: *");
  $con=mysqli_connect("localhost:3306","root","","budgetapp");
  $obj = $_POST["mydata"];
  $result = json_decode($obj);
  $income= $result->income;
  $saving= $result->saving;
  $sql="UPDATE budget SET income='$income',savingTarget='$saving'WHERE budgetId=1; ";
  if ($con->query($sql)===True){
    echo "Updated";
  }
  else{
    echo "something wrong";
  }
?>
