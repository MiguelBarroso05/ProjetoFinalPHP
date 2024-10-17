<?php
function updateUser($name, $surname, $email, $password, $password_check, $role, $district, $county, $id)
{
    if ($name == "" || $surname == "" || $email == "" || $district == "" || $county == "" || $role == "") {
        echo "Please fill in all the fields";
    } else {
        include 'Connections/config.php';

        $name = mysqli_real_escape_string($conn, $name);
        $surname = mysqli_real_escape_string($conn, $surname);
        $email = mysqli_real_escape_string($conn, $email);
        $password = mysqli_real_escape_string($conn, $password);
        $password_check = mysqli_real_escape_string($conn, $password_check);
        $role = mysqli_real_escape_string($conn, $role);
        $checkEmailAreadyRegistered = mysqli_fetch_array(mysqli_query($conn, "SELECT email FROM user WHERE email = '$email' AND id != '$id'"));
        if (!$checkEmailAreadyRegistered) {
            if ($password != "") {
                if ($password == $password_check) {
                    $password = base64_encode($password);
                    mysqli_query($conn, "UPDATE user SET  name = '$name', surname = '$surname', email = '$email', password = '$password', role = '$role', district = '$district', county = '$county' WHERE user.id = '$id'");
                    if(isset($_SESSION["role"]) && $_SESSION["role"] == 1){
                        //TODO ADICIONAR REDIRECIONAMENTO PARA MANAGE USERS (ADMIN)
                    }
                    else{
                        //TODO ADICIONAR REDIRECIONAMENTO PARA HOME (USER)
                    }
                } else {
                    echo 'The passwords do not match';
                }
            } else {
                mysqli_query($conn, "UPDATE user SET  name = '$name', surname = '$surname', email = '$email', role = '$role', district = '$district', county = '$county' WHERE user.id = '$id'");
                if(isset($_SESSION["role"]) && $_SESSION["role"] == 1){
                    //TODO ADICIONAR REDIRECIONAMENTO PARA MANAGE USERS (ADMIN)
                }
                else{
                    //TODO ADICIONAR REDIRECIONAMENTO PARA HOME (USER)
                }
            }
        } else {
            echo 'Email already registered';
        }
    }
}
