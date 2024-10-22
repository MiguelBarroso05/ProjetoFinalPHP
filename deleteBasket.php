<?php

include 'Connections\config.php';
$q = mysqli_query($conn, "SELECT FROM basket WHERE status = 2");
$a = mysqli_fetch_array($q);
$basket_id = $a["id"];
mysqli_query($conn, "DELETE FROM basket WHERE id = '$basket_id'");
echo '<meta http-equiv="refresh" content="0;url=index.php?nav=productDisplay">';
