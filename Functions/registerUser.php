<?php
function registerUser($name, $surname, $email, $password, $password_check, $district, $county)
{



	if ($name == "" || $surname == "" || $email == "" || $password == "" || $password_check == "" || $district == "" || $county == "") {
		echo "Please fill in all the fields";
	} else {
		include 'Connections/config.php';
		$name = mysqli_real_escape_string($conn, $name);
		$surname = mysqli_real_escape_string($conn, $surname);
		$email = mysqli_real_escape_string($conn, $email);
		$password = mysqli_real_escape_string($conn, $password);
		$password_check = mysqli_real_escape_string($conn, $password_check);
		if ($password == $password_check) {
			$checkUserAreadyCreated = mysqli_fetch_array(mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'"));
			if (!$checkUserAreadyCreated) {
				$password = base64_encode($password);
				$id = mysqli_insert_id($conn); //chave primaria gerada na ultima interação
				mysqli_query($conn, "INSERT INTO user (id, name, surname, email, password, district, county) VALUES ('$id', '$name', '$surname', '$email', '$password', '$district', '$county')");
				echo 'Account created with success!';
			} else {
				echo 'Email already registered';
			}
		} else {
			echo 'The passwords do not match';
		}
	}
}
