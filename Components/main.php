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
		case 'adminCategories':
			include 'Components\Admin\ManageCategories.php';
			break;
		case 'adminProducts':
			include 'Components\Admin\manageProducts.php';
			break;
		case 'updateProduct':
			include 'Components/Admin/updateProduct.php';
			break;
		case 'createProduct':
			include 'Components/Admin/createProduct.php';
			break;
		case 'dashboard':
			include 'Components/Admin/dashboard.php';
			break;
		case 'productDisplay':
			include 'Components/productDisplay.php';
			break;
		default:
			echo '<marquee style="margin-top: 5%;"><img src="./images/image.png" alt=""><marquee>';
			break;
	}
	?>
</main>