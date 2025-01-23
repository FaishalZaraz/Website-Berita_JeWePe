<?php
// Include the config_query.php file where the database class is defined
include 'admin/config_query.php'; // Ensure the path is correct

// Check if the form is submitted
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate if fields are empty
    if (empty($username) || empty($password) || empty($confirm_password)) {
        header("Location: register.php?pesan=empty");
        exit();
    }

    // Check if passwords match
    if ($password != $confirm_password) {
        header("Location: register.php?pesan=mismatch");
        exit();
    }

    // Create an instance of the database class
    $db = new database();

    // Check if the username already exists in the database
    $result = $db->get_data_admin($username);
    if (mysqli_num_rows($result) > 0) {
        header("Location: register.php?pesan=exists");
        exit();
    }

    // Hash the password before storing it in the database
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert the new user into the database with created_at and updated_at
    $query = "INSERT INTO tb_admin (name, username, password, created_at, updated_at) 
              VALUES ('admin', '$username', '$hashed_password', NOW(), NOW())";
    $insert = mysqli_query($db->connection, $query);

    if ($insert) {
        // Redirect to register page with success message
        header("Location: register.php?pesan=success");
    } else {
        // Handle insertion failure
        echo "Error: " . mysqli_error($db->connection);
    }
}
?>
