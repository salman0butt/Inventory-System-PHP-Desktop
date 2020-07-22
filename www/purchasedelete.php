<?php

include_once 'includes/db.php';

$id = $_POST['pidd'];

try
{
    // begin the transaction
    $pdo->beginTransaction();
// $payments_details = "DELETE FROM `payments` WHERE invoice_id =$id";
// $payment = $pdo->prepare($payments_details);
//  $payment->bindParam(':id', $id);
// $payment->execute();

// DELETE T1, T2 FROM T1 INNER JOIN T2 ON T1.key = T2.key  WHERE condition T1.key=id;

    // to make sure the foreign key constraint is ON
    $pdo->exec('PRAGMA foreign_keys = ON');
$sql = "delete FROM `purchase_invoice_details` WHERE invoice_id=:id";

//$sql="delete from tbl_product where pid=$id";

$delete = $pdo->prepare($sql);
 $delete->bindParam(':id', $id);

$delete->execute();
$sql_again = "delete FROM `purchase_invoice` WHERE invoice_id=:id";

$delete_again = $pdo->prepare($sql_again);
 $delete_again->bindParam(':id', $id);
 $delete_again->execute();
   echo "deleted";
    // commit update
    $pdo->commit();
}
catch(\PDOException $e)
{
    // rollback update
    $pdo->rollback();
    //
    throw $e;
}

?>