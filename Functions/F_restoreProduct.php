<?php

function restoreProcduct($id)
{
    include 'Connections/config.php';
    if ($id != null) {
        $mysqli_query($conn, "UPDATE product SET active = 1 WHERE id = $id");
        echo '<meta http-equiv="refresh" content="0;url=index.php?nav=adminProducts">';
    }
}