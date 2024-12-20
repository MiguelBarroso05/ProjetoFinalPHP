<?php

session_start();
include 'Functions/F_registerUser.php';
include 'Functions/F_loginUser.php';
include 'Functions/F_getDistricts.php';
include 'Functions/F_getCountys.php';

include 'Functions/F_updateUser.php';
include 'Functions/F_getRoleName.php';
include 'Functions/F_getCategories.php';
include 'Functions/F_createCategory.php';

include 'Functions/F_updateCategory.php';
include 'Functions/F_createProduct.php';
include 'Functions/F_getCategoriesDropdown.php';
include 'Functions/F_updateProduct.php';

include 'Functions/F_getBasket.php';
include 'Functions/F_addProductToBasket.php';
include 'Functions/Dashboard/F_getCategorySales.php';
include 'Functions/Dashboard/F_getLastMonthSales.php';

include 'Functions/F_restoreCategory.php';
include 'Functions/F_getUnactiveProducts.php';
include 'Functions/F_restoreProduct.php';
include 'Functions/F_checkrole.php';
?>