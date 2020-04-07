<?php include 'budgetCategory.php'; ?>
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
    <link rel="stylesheet" type="text/css" href="../css/budget.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/functions-budget.js"></script>

    </head>
<body>
<div class="sidenav">
  <div><i class="fa fa-dollar"></i></div>
  <a href="/php/dashboard.php">Dashboard</a>
  <a class="active">Budgeting</a>
  <a href="../history.html">History</a>
  <a href="../settings.html">Settings</a>
</div>

<div class="main">
  <div class="nav-tab">
    <h1>Budgeting</h1>

      <?php
      incomeAndSaving();
      budgetCategory('food');
      budgetCategory('trans');
      budgetCategory('util');
      budgetCategory('ent');
      budgetCategory('liv');


     ?>

    <div class="monthly-payments">
      <h1>Monthly payments</h1>
      <table>
        <th>Category</th>
        <th>Items</th>
        <th>Amount</th>
        <tr class="add-new-item-row">
          <td>
            <select class="dropdown-category">
              <option value="Food">Food</option>
              <option value="Transportation">Transportation</option>
              <option value="Utilities">Ultilities</option>
              <option value="Entertainment">Entertainment</option>
              <option value="Living">Living</option>
            </select>
          </td>
          <td>
            <input class="item-name large" type="text" placeholder="Item name">
          </td>
          <td>
            <input class="item-amount large" type="number" placeholder="Amount">
          </td>
          <td>
            <input class="add-row" type="submit" name="" value="Add">
          </td>
        </tr>
        <tr>
          <td>Food</td>
          <td>Sushi</td>
          <td>11.00</td>
          <td>
            <button class="delete-row" type="button" name="button">Delete</button>
          </td>
        </tr>
        <tr>
          <td>Entertainment</td>
          <td>Netflix</td>
          <td>11.00</td>
          <td>
            <button class="delete-row" type="button" name="button">Delete</button>
          </td>
        </tr>
        <tr>
          <td>Transportation</td>
          <td>Bus pass</td>
          <td>54.00</td>
          <td>
            <button class="delete-row" type="button" name="button">Delete</button>
          </td>
        </tr>
        <tr>
          <td>Ultilities</td>
          <td>Phone Bill</td>
          <td>60.00</td>
          <td>
            <button class="delete-row" type="button" name="button">Delete</button>
          </td>
        </tr>
        <tr>
          <td>Living</td>
          <td>Rent</td>
          <td>1000</td>
          <td>
            <button class="delete-row" type="button" name="button">Delete</button>
          </td>
        </tr>

      </table>

    </div>
  </div>
</body>
</html>
