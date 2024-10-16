<?php
@include '../Connections/config.php';

@$district_id = $_REQUEST["district_id"];
echo '<script>console.log("Dentro da funçao ' . $district_id . '");</script>';

$q = mysqli_query($conn, "SELECT * FROM county WHERE district_id = '$district_id'");
$aux = mysqli_num_rows($q);
echo '<script>console.log("Dentro da funçao ' . $aux . '");</script>';

while ($a = mysqli_fetch_array($q)) {
    echo '<option value="' . $a['id'] . '">' . $a['name'] . '</option>';
}
?>