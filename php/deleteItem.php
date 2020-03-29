<?php
  header("Access-Control-Allow-Origin: *");
  $con=mysqli_connect("localhost:3306","root","","budgetapp");
  $obj = $_POST["id"];
  $sql="DELETE FROM spendingentry WHERE spendingentryid='$obj'";
  if ($con->query($sql)===True){echo "deleted";}
?>
