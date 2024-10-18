<?php
include '../Connections/config.php';
include 'F_getRoleName.php';


if ((isset($_REQUEST["district_id_list"]) && $_REQUEST["district_id_list"] != -1) || (isset($_REQUEST["county_id_list"]) && $_REQUEST["county_id_list"] == -1)) {
    $q = mysqli_query($conn, "SELECT u.id, u.name, u.surname, u.email, d.name as district, c.name as county, u.role
        FROM user u
        JOIN district d ON d.id = u.district
        JOIN county c ON c.id = u.county
        WHERE u.district = '" . $_REQUEST["district_id_list"] . "'");
} elseif (isset($_REQUEST["county_id_list"]) && $_REQUEST["county_id_list"] != -1) {
    $q = mysqli_query($conn, "SELECT u.id, u.name, u.surname, u.email, d.name as district, c.name as county, u.role
        FROM user u
        JOIN district d ON d.id = u.district
        JOIN county c ON c.id = u.county
        WHERE u.county = '" . $_REQUEST["county_id_list"] . "'");
} else {
    $q = mysqli_query($conn, "SELECT u.id, u.name, u.surname, u.email, d.name as district, c.name as county, u.role
    FROM user u
    JOIN district d ON d.id = u.district
    JOIN county c ON c.id = u.county");
}


if (mysqli_num_rows($q) != 0) {
    while ($a = mysqli_fetch_array($q)) {

        $role = getRoleName($a['role']);

        echo '   <tr>
            <th scope="row">' . $a['id'] . '</th>
            <td>' . $a['name'] . '</td>
            <td>' . $a['surname'] . '</td>
            <td>' . $a['email'] . '</td>
            <td>' . $a['district'] . '</td>
            <td>' . $a['county'] . '</td>
            <td>' . $role . '</td>
            <td><a class="editIcon" href="?nav=updateUser&id=' . $a['id'] . '" ><i class="fa-solid fa-user-pen"></i></a></td>
            <td><a class="editIcon" href="deleteUser.php?id=' . $a['id'] . '" ><i class="fa-solid fa-user-xmark"></i></a></td>
            
            </tr>
            ';
    }
}
