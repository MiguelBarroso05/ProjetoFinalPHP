<?php   
function registerUser($name, $surname, $email, $password, $password_check, $district, $county){
	include 'Connections/config.php';
	$name = mysqli_real_escape_string($conn, $name);
	$surname = mysqli_real_escape_string($conn, $surname);
	$email = mysqli_real_escape_string($conn, $email);
	$password = mysqli_real_escape_string($conn, $password);
	$password_check = mysqli_real_escape_string($conn, $password_check);

    
	//inserir user
	//saber se o user ja existe
	//ver se as senhas sao iguais

	if($password == $password_check){
		//avança ver se o email existe na BD
		
		$checkUserAreadyCreated = mysqli_fetch_array(mysqli_query($conn,"SELECT email FROM User WHERE email = '$email'"));
		if(!$checkUserAreadyCreated){
			//posso criar um utilizador
			$password = base64_encode($password); 
			$id = mysqli_insert_id($conn);//chave primaria gerada na ultima interação
			mysqli_query($conn, "INSERT INTO user (id, name, surname, email, password, district, county) VALUES ('$id', '$name', '$surname', '$email', '$password', '$district', '$county')");
			echo 'Account created with success!';
		}else{
			echo 'Email already registered';
		}

	}else{
		echo 'The passwords do not match';
	}


}


?>