<?php
  header("Access-Control-Allow-Origin: *");
  $con=mysqli_connect("localhost:3306","root","","budgetapp");
  $obj = $_POST["mydata"];
  $result = json_decode($obj);
  $category= $result->category;
  $itemname= $result->name;
  $amount= $result->amount;
  $sql="INSERT INTO spendingentry (category,itemname,amount) VALUES ('$category','$itemname','$amount')";
  if ($con->query($sql)===True){
    echo "Item successfully added";
  }
  else{
    echo "Something went wrong. Please try again";
  }

?>
