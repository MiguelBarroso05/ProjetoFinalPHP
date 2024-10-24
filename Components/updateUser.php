<?php $id = $_REQUEST['id'];

include 'Connections/config.php';

$q = mysqli_query($conn, "SELECT u.id AS id, u.name, u.surname, u.email, d.id as district_id, d.name as district, c.id as county_id, c.name as county, u.role
        FROM user u
        JOIN district d ON d.id = u.district
        JOIN county c ON c.id = u.county
        WHERE u.id = '$id'");
$a = mysqli_fetch_array($q);

$role = getRoleName($a['role']);

?>

<div class="container" style="padding-top: 2%; padding-bottom: 2%;">
    <div class="d-flex justify-content-center">
        <form style="width: 100%; max-width: 400px;" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input name="name" value="<?php echo $a['name'] ?>" type="text" class="form-control" id="id_name" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Surname</label>
                <input name="surname" value="<?php echo $a['surname'] ?>" type="text" class="form-control" id="id_surname" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <?php 
                    if(isset($_SESSION["role"]) && $_SESSION["role"] == 1){
                        echo '<label for="exampleInputEmail1" class="form-label">Email address</label>';
                        echo '<input name="email" value="'.$a['email'].'" type="email" class="form-control " id="id_email" aria-describedby="emailHelp">';
                    }
                    else {
                        echo '<label for="exampleInputEmail1" class="form-label">Email address</label>';
                        echo '<input name="email" value="'.$a['email'].'" type="email" class="form-control " id="id_email" aria-describedby="emailHelp" readonly>';
                    }
                    
                ?>
                </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" placeholder="please fill in to update" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                <input name="password_check" type="password" class="form-control" placeholder="please confirm to update" id="exampleInputPassword1">
            </div>
            <select name="district" id="districtSelect" class="form-select mb-3" aria-label="Default select example">
                <option selected value="<?php echo $a['district_id'] ?>"> <?php echo $a['district'] ?></option>
                <?php
                    getDistricts();
                ?>
            </select>
            <select name="county" id="countySelect" class="form-select mb-3" aria-label="Default select example">
                <option selected value="<?php echo $a['county_id'] ?>"><?php echo $a['county'] ?></option>
            </select>
            <?php
            if (isset($_SESSION["role"]) && $_SESSION["role"] == 1) {
                echo '<select name="role" class="form-select mb-3" aria-label="Default select example">';
                echo '<option selected value="' . $a['role'] . '">' . $role . '</option>';
                if ($a['role'] != '1') {
                    echo '<option value="1">Admin</option>';
                }
                if ($a['role'] != '2') {
                    echo '<option value="2">User</option>';
                }
                echo '</select>';
            }
            ?>
            <button name="update_submit" type="submit" class="btn btn-primary InteractiveButton">Update User</button>
        </form>
    </div>
</div>
<?php

if (isset($_POST["update_submit"])) {
    if(isset($_SESSION["role"]) && $_SESSION["role"] == 1){
        updateUser($_POST['name'], $_POST['surname'], $_POST['email'], $_POST['password'], $_POST['password_check'], $_POST['role'], $_POST['district'], $_POST['county'], $a['id']);
    }
    else{
        updateUser($_POST['name'], $_POST['surname'], $_POST['email'], $_POST['password'], $_POST['password_check'], 2, $_POST['district'], $_POST['county'], $a['id']);
    }
    
}


?>