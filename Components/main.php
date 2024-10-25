<main style="background-color: #f6f8fb; min-height: 85.1vh" >
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
		case 'basket':
			include 'Components/basket.php';
			break;
		case 'userOrders':
			include 'Components/orderHistory.php';
			break;
		case 'adminSales':
			include 'Components/Admin/manageSales.php';
			break;
		default:
		if (isset($_SESSION["role"]) && $_SESSION["role"] == 1) {
			include 'Components/Admin/dashboard.php';

		} elseif (isset($_SESSION["role"]) && $_SESSION["role"] == 2) {
			include 'Components/productDisplay.php';
		}
		else
			include 'Components/login.php';
			break;
	}
	?>
</main>
