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
		default:		
			break;
	}
	?>
</main>