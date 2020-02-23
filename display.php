<?php
header("Access-Control-Allow-Origin: *");
include("connect.php");
mysqli_select_db("firstbase",$con);
$result=mysqli_query("select * user_account",$con);

foreach($result as $data)
{
    echo '<li>' . $data . '</li>';
}

if ($con) {
  echo 'connected';
} else {
  echo 'not connected';
}
?>