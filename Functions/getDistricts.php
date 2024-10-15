<?php

function getDistricts() {
    include 'Connections/config.php';
    
    $q = mysqli_query($conn, "SELECT * FROM district");
    while ($a = mysqli_fetch_array($q)) {
        echo '<option value="'.$a['id'].'">'.$a['name'].'</option>';
    }
}

?>
