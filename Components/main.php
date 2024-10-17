<main>
	<?php 

	@$nav = $_REQUEST['nav'];
	switch ($nav) {
		case 'login':
			include 'Components/login.php';
			break;
		case 'register':
			include 'Components/register.php';
			break;
		case 'adminUsers':
			include 'Components\Admin\ManageUsers.php';
			break;
		case 'updateUser':
			include 'Components/updateUser.php';
			break;	
		default:	
			echo'<marquee style="margin-top: 5%;"><img src="./images/image.png" alt=""><marquee>';	
			break;
	}
	?>
</main>
