<div class="container  mt-5 ">
    <div class="d-flex justify-content-center">
        <form style="width: 100%; max-width: 400px;">
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
            <select id="districtSelect" class="form-select mb-3" aria-label="Default select example">
                <option disabled selected>Select a District</option>
                <?php
                getDistricts()
                ?>
            </select>
            <select id="CountySelect" class="form-select mb-3" aria-label="Default select example">
               
            </select>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">I agree with the terms of service of Herdades do Sol</label>
            </div>
            <button name="register_submit" type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</div>
<?php
if (isset($_SESSION["register_submit"])) {
    registerUser($name, $surname, $email, $password, $password_check, $district, $county);
}
?>