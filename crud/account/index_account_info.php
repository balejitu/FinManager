<?php

require_once "pdo.php";

session_start();

?>

<html>

<head>
</head>
<body>

<?php

if ( isset($_SESSION['error']) ) 
{
    echo '<p style="color:red">'.$_SESSION['error']."</p>\n";

    unset($_SESSION['error']);

}

if ( isset($_SESSION['success']) )
 {
    echo '<p style="color:green">'.$_SESSION['success']."</p>\n";

      unset($_SESSION['success']);

 }

echo('<table border="1">'."\n");

$stmt = $pdo->query("SELECT acc_id, acc_name, acc_type, user_id FROM account");

while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) )
 {
    echo "<tr><td>";

      echo(htmlentities($row['acc_id']));
 
      echo("</td><td>");
  
    echo(htmlentities($row['acc_name']));
 
      echo("</td><td>");

      echo(htmlentities($row['acc_type']));
  
      echo("</td><td>");

      echo(htmlentities($row['user_id']));
  
      echo("</td><td>");
      echo('<a href="edit_account_info.php?acc_id='.$row['acc_id'].'">Edit</a> / ');

      echo('<a href="delete_account_info.php?acc_id='.$row['acc_id'].'">Delete</a>');
  
    echo("</td></tr>\n");
}
?>
</table>
<a href="add_account_info.php">Add New</a>





