<?php
include 'Connections\config.php';
$product_id = $_REQUEST['product_id'];
$basket_id = $_REQUEST['basket_id'];
$amount = $_REQUEST['amount'];
mysqli_query($conn, "UPDATE product_basket SET amount = $amount WHERE product_id = '$product_id' AND basket_id = '$basket_id'");
echo '<meta http-equiv="refresh" content="0;url=index.php?nav=basket">';
