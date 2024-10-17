<?php

function loginUser($email, $password)
{
    include 'connections/config.php';
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    $password = base64_encode($password);

    if ($email == "" || $password == "") {
        echo "Please fill in all the fields";
    } else {
        $q = mysqli_query($conn, "SELECT email, password, role FROM user WHERE email = '$email' AND password = '$password' AND ative = 1");
        $check = mysqli_num_rows($q); 

        if ($check == 0) {
            echo 'Error';
        } else {
            
            $a = mysqli_fetch_array($q);

            $_SESSION["email"] =  $a["email"];
            $_SESSION["role"] = $a["role"];
            echo '<meta http-equiv="refresh" content="0;url=index.php">';
        }
    }
}
