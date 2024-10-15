<?php

    include '../Connections/config.php';

    $district_id = $_REQUEST["district_id"];
    $q = mysqli_query($conn, "SELECT * FROM county WHERE district_id = $district_id");

    while ($a = mysqli_fetch_array($q)) {
        echo '<option value="'.$a['id'].'">'.$a['name'].'</option>';
    }
?> 