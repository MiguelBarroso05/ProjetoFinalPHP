<?php

include '../Connections/config.php';

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    mysqli_query($conn, "UPDATE product SET active = 0 WHERE id = '$id'");
    echo '<meta http-equiv="refresh" content="0;url=../index.php?nav=adminProducts">';
}