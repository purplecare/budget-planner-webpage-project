<?php
  function createTableHeader($category){
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
    echo
    '<div class="grid-container">
        <div class="category-text">'.$title.'</div>
        <div class="budget-amount">Budget amount: 200</div>
        <div class="amount-spent">Amount spent: 200</div>
        <div class="budget-left">Budget left: 200</div>
      </div>';


  }
   function createTable($category){
     $con=mysqli_connect("localhost:3306","root","","budgetapp");
     echo
     '<table class="dashboard_row_items">
       <th>Items</th>
       <th>Amount</th>';
         $sql="SELECT * FROM spendingentry Where category='$category'";
         $message=$con-> query($sql);
         if ($message->num_rows>0){
           while ( $row= $message->fetch_assoc()){
             echo "<tr id=".$row["spendingentryid"].">";
             echo
               "<td>".$row["itemname"]."</td>
               <td>".$row["amount"]."</td>
               <td><button class='edit' value=".$row["spendingentryid"].">Edit</button></td>
               <td><button class='delete' value=".$row["spendingentryid"].">Delete</button></td>";
             echo "</tr>";
           }
          }
        echo'</table>';
   }
?>
