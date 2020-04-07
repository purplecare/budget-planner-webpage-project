<?php
  function budgetCategory($category){
    $title="";
    switch($category){
      case "food":
        $title="Food";
        break;
      case "trans":
        $title="Transportation";
        break;
      case "util":
        $title="Utilities";
        break;
      case "ent":
        $title="Entertainment";
        break;
      case "liv":
        $title="Living Expense";
        break;
    }
    $con=mysqli_connect("localhost:3306","root","","budgetapp");
    $sql="SELECT * FROM budget";
    $result=$con->query($sql);
    $row=$result->fetch_assoc();
    echo
      '<div class="category-'.$category.'">
        <div class="grid-container">
          <div class="category-text">'.$title.'</div>
          <div class="budget-amount">Target budget<input class="amount-input" id="budget-'.$category.'"type="number" value="'.$row[$category].'""></div>
        </div>
      </div>';
  }
  function incomeAndSaving(){
    $con=mysqli_connect("localhost:3306","root","","budgetapp");
    $sql= "SELECT * from budget ";
    $result=$con-> query($sql);
    $row=$result->fetch_assoc();
    echo '
    Monthly income:<input type="number" class="large" id="monthly-income" value="'.$row['income'].'">
    Monthly Saving Target:
    <input type="number" class="large" id="monthly-saving" value="'.$row['savingTarget'].'">';
    $bgleft= $row['income']-$row['savingTarget']-$row['food']-$row['trans']-$row['ent']-$row['util']-$row['liv'];
    echo '<h2 style="text-align: right">Current Amount left for Budgeting=$'.$bgleft.'</h2>';

  }
 ?>
