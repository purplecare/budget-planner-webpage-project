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
 ?>
