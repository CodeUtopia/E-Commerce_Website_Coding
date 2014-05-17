<?php
//deleteItem.php
//main begins
session_start();
include "database.php";

$order_item = $_GET["order_item"];
$order_id = $_GET["order_id"];

$order_item = stripslashes($order_item);
$order_id = stripslashes($order_id);
$query = "DELETE FROM Order_Items WHERE order_item_id = $order_item;";
mysql_query($query)
    or die(mysql_error());

$query = "SELECT COUNT(*) AS numItemsStillInOrder
    FROM Order_Items
    WHERE order_id=$order_id;";
$return_value = mysql_query($query)
    or die(mysql_error());
$row = mysql_fetch_array($return_value);
if ($row[numItemsStillInOrder] == 0)
{
    $query = "DELETE FROM Orders WHERE order_id=$order_id;";
    mysql_query($query)
        or die(mysql_error());
}

header('Location: ../purchasing.php?prod=view');
//main ends
?>
