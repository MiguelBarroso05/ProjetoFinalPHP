<?php

if (isset($_REQUEST['id'])) {
    include 'Connections\config.php';
    $id = $_REQUEST['id'];
    mysqli_query($conn, "DELETE FROM user WHERE id = '$id'");
    echo '<meta http-equiv="refresh" content="0;url=index.php?nav=adminUsers">';
}
