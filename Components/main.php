<main>
	<?php 
	include 'Functions\index.php';

	@$nav = $_REQUEST['nav'];
	switch ($nav) {
		case 'login':
			include 'Components/login.php';
			break;
		case 'register':
			include 'Components/register.php';
			break;
		
		default:		
			break;
	}


	?>
</main>