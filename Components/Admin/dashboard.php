<?php
if (isset($_SESSION['role'])) {
    checkrole($_SESSION['role']);
}   
?>

<div class="dashboardContainer pt-2" >
    <div class="dashboardRow">
    <div class="dashboardCell">
        <?php include('Components/Admin/Dashboard/lastClientTable.php'); ?>
    </div>
        <div class="dashboardCell">
        <?php include('Components/Admin/Dashboard/bestSellingProducts.php'); ?>
        </div>
    </div>
    <div class="dashboardRow">
        <div class="dashboardCell">
            <?php include('Components/Admin/Dashboard/categoryChart.php'); ?>
        </div>
        <div class="dashboardCell">
            <?php include('Components/Admin/Dashboard/lastMonthSales.php'); ?>
        </div>
    </div>
</div>