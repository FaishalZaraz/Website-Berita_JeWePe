<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="assets/admin/assets/" data-template="vertical-menu-template-free">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Register e-Mading JeWePe</title>
    <meta name="description" content="" />
    <link rel="icon" type="image/x-icon" href="assets/admin/assets/img/favicon/favicon.ico" />
    <link rel="stylesheet" href="assets/admin/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/admin/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/admin/assets/css/demo.css" />
    <script src="assets/admin/assets/vendor/js/helpers.js"></script>
    <script src="assets/admin/assets/js/config.js"></script>
</head>
<body>
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-2">Create an Account</h4>
                        <p class="mb-4">
                            <?php
                                if(isset($_GET['pesan'])){
                                    if($_GET['pesan'] == 'empty') {
                                        echo '<i class="text-danger">All fields are required!</i>';
                                    } else if ($_GET['pesan'] == 'mismatch') {
                                        echo '<i class="text-danger">Passwords do not match!</i>';
                                    } else if ($_GET['pesan'] == 'exists') {
                                        echo '<i class="text-danger">Username already exists!</i>';
                                    } else if ($_GET['pesan'] == 'success') {
                                        echo '<i class="text-success">Registration successful! Please login.</i>';
                                    }
                                }
                            ?>
                        </p>
                        <form id="formRegistration" class="mb-3" action="register_process.php" method="POST">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required />
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required />
                            </div>
                            <div class="mb-3">
                                <label for="confirm_password" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required />
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" name="submit" type="submit">Sign Up</button>
                            </div>
                        </form>
                        <p class="text-center">
                            <a href="login.php"><span>Already have an account? Sign in</span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/admin/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/admin/assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/admin/assets/vendor/js/bootstrap.js"></script>
    <script src="assets/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/admin/assets/vendor/js/menu.js"></script>
    <script src="assets/admin/assets/js/main.js"></script>
</body>
</html>
