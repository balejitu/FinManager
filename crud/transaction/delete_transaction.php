<?php

require_once "pdo.php";

session_start();


if ( isset($_POST['delete']) && isset($_POST['acc_id']) && isset($_POST['amount']))
 {
    
      $sql2 = "Update account
		set account.curr_balance = account.curr_balance + :amount
		where account.acc_id = :acc_id";
      $stmt2 = $pdo->prepare($sql2);
      $stmt2->execute(array(':amount' => $_POST['amount'],':acc_id' => $_POST['acc_id']));

      $sql = "DELETE FROM transaction_info WHERE acc_id = :zip";

      $stmt = $pdo->prepare($sql);
  
    $stmt->execute(array(':zip' => $_POST['acc_id']));
  
    $_SESSION['success'] = 'Record deleted';
  
    header( 'Location: index_transaction.php' ) ;
  
    return;

}


// Guardian: Make sure that acc_id is present

if ( ! isset($_GET['acc_id']) )
  {
  
  $_SESSION['error'] = "Missing acc_id";
  
  header('Location: index_transaction.php');

    return;
  
}


$stmt = $pdo->prepare("SELECT description, acc_id, amount FROM transaction_info where acc_id = :xyz");

$stmt->execute(array(":xyz" => $_GET['acc_id']));

$row = $stmt->fetch(PDO::FETCH_ASSOC);

if ( $row === false ) 
{
    $_SESSION['error'] = 'Bad value for acc_id';

     header( 'Location: index_transaction.php' ) ;
 
    return;

}

?>

<p>Confirm: Deleting <?= htmlentities($row['dexcription']) ?></p>


<form method="post">

<input type="hidden" name="acc_id" value="<?= $row['acc_id'] ?>">

<input type="submit" value="Delete" name="delete">

<a href="index_transaction.php">Cancel</a>

</form>
