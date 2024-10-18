<?php
if (isset($_REQUEST["district_id_list"]) && $_REQUEST["district_id_list"] != -1) {
    include '../Connections/config.php';
    $district_id = $_REQUEST["district_id_list"];


    $q = mysqli_query($conn, "SELECT * FROM county WHERE district_id = '$district_id'");

    echo '<option value="-1" selected>All Countys</option>';
    while ($a = mysqli_fetch_array($q)) {
        echo '<option value="' . $a['id'] . '">' . $a['name'] . '</option>';
    }
}
elseif (isset($_REQUEST["district_id_list"]) && $_REQUEST["district_id_list"] == -1) {
    echo '<option disabled selected>Select a County</option>';
}
?>