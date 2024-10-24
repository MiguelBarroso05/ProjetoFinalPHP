<?php

function restoreCategory($id)
{
    include 'Connections/config.php';

    mysqli_query($conn, "UPDATE category SET active = 1 WHERE id = '$id'");

    echo '<meta http-equiv="refresh" content="0;url=index.php?nav=adminCategories">';
}