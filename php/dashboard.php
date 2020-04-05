<?php
header("Access-Control-Allow-Origin: *");
$con=mysqli_connect("localhost:3306","root","","budgetapp");
//$con=mysqli_connect("localhost:3306","trevor","","budgetapp");
include 'createTable.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Budget Application</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="UTF-8">
    <meta name="description" content="Budget Application">
    <meta name="keywords" content="Budget Application">
    <meta name="author" content="Simon Fu and Trevor Siu">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/dashboard.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="../js/functions-dashboard.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>


    </head>
<body>
  <div class="sidenav">
    <div><i class="fa fa-dollar"></i></div>
    <a class="active">Dashboard</a>
    <a href="../budget.html">Budgeting</a>
    <a href="../history.html">History</a>
    <a href="../settings.html">Settings</a>
  </div>

  <div class="main">
    <div id="dbupdateresult">
      some message
    </div>
    <div class="nav-tab">
      <h1>Dashboard</h1>
      <h2>Sept, 2019</h2>
      <form  id="additem" class="ajax" method="post">
        Category:
        <select class="dropdown-category" id="category" name="category" value="food">
          <option value="food">Food</option>
          <option value="trans">Transportation</option>
          <option value="util">Ultilities</option>
          <option value="ent">Entertainment</option>
          <option value="liv">Living</option>
        </select>
        Item Name:
        <input class="item-name" type="text" name="name" id="name">
        Amount:
        <input class="item-amount" type="number" name="amount"id="amount">
        <input id="add-button" type="submit" value="Add new items">
      </form>
    <div class="category-food">
      <?php
       createTableHeader("food");
       createTable("food");
      ?>
    </div>
    <div class="category-transportation">
      <?php
       createTableHeader("trans");
       createTable("trans");
      ?>
    </div>
    <div class="category-ultilities">
      <?php
       createTableHeader("util");
       createTable("util");
      ?>
    </div>
    <div class="category-entertainment">
      <?php
       createTableHeader("ent");
       createTable("ent");
      ?>
    </div>
    <div class="category-living">
      <?php
       createTableHeader("liv");
       createTable("liv");
      ?>
    </div>

  </div>
</body>
</html>
