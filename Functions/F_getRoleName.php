<?php 
function getRoleName($roleId) {

    switch ($roleId) {
        case 1:
            return "Admin";
        case 2:
            return "User";
    }
}
?>