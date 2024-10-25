<?php

include '../../Connections/config.php';

$q = mysqli_query($conn, "SELECT * FROM user Order By last_login DESC");

while ($a = mysqli_fetch_array($q)) {
    echo '<tr>
    <td>' . $a['name'] . ' ' . $a['surname'] . '</td>
    <td>' . $a['email'] . '</td>
    <td>' . $a['last_login'] . '</td>
    </tr>';
}