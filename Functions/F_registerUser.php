<?php
function registerUser($name, $surname, $email, $password, $password_check, $role, $district, $county)
{
	if ($name == "" || $surname == "" || $email == "" || $password == "" || $password_check == "" || $district == "" || $county == "" || $role == "") {
		echo "Please fill in all the fields";
	} else {
		include 'Connections/config.php';
		$name = mysqli_real_escape_string($conn, $name);
		$surname = mysqli_real_escape_string($conn, $surname);
		$email = mysqli_real_escape_string($conn, $email);
		$password = mysqli_real_escape_string($conn, $password);
		$password_check = mysqli_real_escape_string($conn, $password_check);
		$role = mysqli_real_escape_string($conn, $role);
		if ($password == $password_check) {
			$checkEmailAlreadyCreated = mysqli_num_rows(mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'"));
			if ($checkEmailAlreadyCreated > 0) {
				echo 'Email already registered';
			} else {
				$password = base64_encode($password);
				mysqli_query($conn, "INSERT INTO user (name, surname, email, password, role, district, county) VALUES ( '$name', '$surname', '$email', '$password', '$role', '$district', '$county')");
				if (isset($_SESSION["role"]) && $_SESSION["role"] == 1) {
					echo '<meta http-equiv="refresh" content="0;url=index.php?nav=adminUsers">';
				}
			}
		} else {
			echo 'The passwords do not match';
		}
	}
}
