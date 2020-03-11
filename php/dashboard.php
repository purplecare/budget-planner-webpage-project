<?php
header("Access-Control-Allow-Origin: *");
$con=mysqli_connect("localhost:3306","root","","budgetapp");
//$con=mysqli_connect("localhost:3306","trevor","","budgetapp");

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
    <!--<script type="text/javascript" src="../js/functions-dashboard.js"></script>-->

    </head>
<body>
  <!--
  <ul>
    <li><a href="#this">This</a></li>
    <li><a href="#content">Content</a></li>
    <li><a href="#will">Will</a></li>
    <li><a href="#change">Change</a></li>
  </ul>-->
  <div class="sidenav">
    <div><i class="fa fa-dollar"></i></div>
    <a class="active">Dashboard</a>
    <a href="budget.html">Budgeting</a>
    <a href="history.html">History</a>
    <a href="settings.html">Settings</a>
  </div>

  <div class="main">
    <div id="dbupdateresult">
      <span>some message</span>
    </div>
    <div class="nav-tab">
      <h1>Dashboard</h1>
      <h2>Sept, 2019</h2>
      <form action="newItem.php" method="post">
        Category:
        <select class="dropdown-category" name="category">
          <option value="food">Food</option>
          <option value="trans">Transportation</option>
          <option value="util">Ultilities</option>
          <option value="ent">Entertainment</option>
          <option value="liv">Living</option>
        </select>
        Item Name:
        <input class="item-name" type="text" name="Items">
        Amount:
        <input class="item-amount" type="number" name="Amount">
        <input id="add-button" type="submit" value="Add new items">
      </form>
    <div class="category-food">
      <div class="grid-container">
        <div class="category-text">Food</div>
        <div class="budget-amount">Budget amount: 200</div>
        <div class="amount-spent">Amount spent: 200</div>
        <div class="budget-left">Budget left: 200</div>

      </div>

      <table class="dashboard_row_items">
        <th>Items</th>
        <th>Amount</th>
        <?php
          $sql="SELECT itemname,amount FROM spendingentry Where category='food'";
          $message=$con-> query($sql);
          if ($message->num_rows>0){
            while ( $row= $message->fetch_assoc()){
              echo "<tr>";
              echo "<td>".$row["itemname"]."</td><td>".$row["amount"]."</td>";
              echo "</tr>";
            }
        }
        ?>
      </table>
    </div>
    <div class="category-transportation">
      <div class="grid-container">
        <div class="category-text">Transportation</div>
        <div class="budget-amount">Budget amount: 200</div>
        <div class="amount-spent">Amount spent: 200</div>
        <div class="budget-left">Budget left: 200</div>

      </div>

      <table class="dashboard_row_items">
        <th>Items</th>
        <th>Amount</th>
        <?php
          $sql="SELECT itemname,amount FROM spendingentry Where category='trans'";
          $message=$con-> query($sql);
          if ($message->num_rows>0){
            while ( $row= $message->fetch_assoc()){
              echo "<tr>";
              echo "<td>".$row["itemname"]."</td><td>".$row["amount"]."</td>";
              echo "</tr>";
            }
        }
        ?>
      </table>
    </div>
    <div class="category-ultilities">
      <div class="grid-container">
        <div class="category-text">Utilities</div>
        <div class="budget-amount">Budget amount: 200</div>
        <div class="amount-spent">Amount spent: 200</div>
        <div class="budget-left">Budget left: 200</div>

      </div>

      <table class="dashboard_row_items">
        <th>Items</th>
        <th>Amount</th>
        <?php
          $sql="SELECT itemname,amount FROM spendingentry Where category='util'";
          $message=$con-> query($sql);
          if ($message->num_rows>0){
            while ( $row= $message->fetch_assoc()){
              echo "<tr>";
              echo "<td>".$row["itemname"]."</td><td>".$row["amount"]."</td>";
              echo "</tr>";
            }
        }
        ?>
      </table>
    </div>
    <div class="category-entertainment">
      <div class="grid-container">
        <div class="category-text">Entertainment</div>
        <div class="budget-amount">Budget amount: 200</div>
        <div class="amount-spent">Amount spent: 200</div>
        <div class="budget-left">Budget left: 200</div>

      </div>

      <table class="dashboard_row_items">
        <th>Items</th>
        <th>Amount</th>
        <?php
          $sql="SELECT itemname,amount FROM spendingentry Where category='ent'";
          $message=$con-> query($sql);
          if ($message->num_rows>0){
            while ( $row= $message->fetch_assoc()){
              echo "<tr>";
              echo "<td>".$row["itemname"]."</td><td>".$row["amount"]."</td>";
              echo "</tr>";
            }
        }
        ?>
      </table>
    </div>
    <div class="category-living">
      <div class="grid-container">
        <div class="category-text">Living expense</div>
        <div class="budget-amount">Budget amount: 200</div>
        <div class="amount-spent">Amount spent: 200</div>
        <div class="budget-left">Budget left: 200</div>

      </div>

      <table class="dashboard_row_items">
        <th>Items</th>
        <th>Amount</th>
        <?php
          $sql="SELECT itemname,amount FROM spendingentry Where category='liv'";
          $message=$con-> query($sql);
          if ($message->num_rows>0){
            while ( $row= $message->fetch_assoc()){
              echo "<tr>";
              echo "<td>".$row["itemname"]."</td><td>".$row["amount"]."</td>";
              echo "</tr>";
            }
        }
        ?>
      </table>
    </div>

  </div>
</body>
</html>
