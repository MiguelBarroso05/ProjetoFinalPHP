<div class="container  mt-5 ">
    <div class="d-flex justify-content-center">
        <form style="width: 100%; max-width: 400px;" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Surname</label>
                <input name="surname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                <input name="password_check" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <select name="district" id="districtSelect" class="form-select mb-3" aria-label="Default select example">
                <option disabled selected>Select a District</option>
                <?php
                getDistricts()
                ?>
            </select>
            <select name="county" id="countySelect" class="form-select mb-3" aria-label="Default select example">
                <option disabled selected>Select a County</option>
            </select>
            <?php
                if (isset($_SESSION["role"]) && $_SESSION["role"] == 1) {
                    echo '<select name="role" class="form-select mb-3" aria-label="Default select example">
                    <option disabled selected>Select a Role</option>
                    <option value="1">Admin</option>
                    <option value="2">User</option>
                </select>';
                }
            ?>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">I agree with the terms of service of Herdades do Sol</label>
            </div>
            <button name="register_submit" type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</div>
<?php
if (isset($_SESSION["role"]) && $_SESSION["role"] == 1) {
    if (isset($_POST["register_submit"], $_POST['district'], $_POST['county'] )) {
        registerUser($_POST['name'], $_POST['surname'], $_POST['email'], $_POST['password'], $_POST['password_check'], $_POST['role'], $_POST['district'], $_POST['county']);
    }
}
//Client registration by himself
if (isset($_POST["register_submit"], $_POST['district'], $_POST['county'] )) {

    registerUser($_POST['name'], $_POST['surname'], $_POST['email'], $_POST['password'], $_POST['password_check'], 2, $_POST['district'], $_POST['county']);
}
?>