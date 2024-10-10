<?php

function loginUser($email, $password)
{
    include 'connections/config.php';
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    //Query
    //$password = base64_encode($password);

    $q = mysqli_query($conn, "SELECT email, password, role FROM user WHERE email = '$email' AND password = '$password' AND ative = 1");
    $check = mysqli_num_rows($q); //qtas linhas temos de resposta
    if ($check == 0) {
        echo'Error';    
    } else {
        //Ler respostas
        $a = mysqli_fetch_array($q);

        //Existe Utilizador
        $_SESSION["email"] =  $a["email"];
        $_SESSION["role"] = $a["role"];
        echo '<meta http-equiv="refresh" content="0;url=index.php">';
    }
}
?>

