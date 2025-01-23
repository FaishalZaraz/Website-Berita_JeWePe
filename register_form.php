<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <form action="register.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" name="confirm_password" id="confirm_password" required><br><br>

        <input type="submit" name="submit" value="Register">
    </form>

    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == 'empty') {
            echo "<p style='color: red;'>Please fill in all fields!</p>";
        } elseif ($_GET['pesan'] == 'password_mismatch') {
            echo "<p style='color: red;'>Passwords do not match!</p>";
        } elseif ($_GET['pesan'] == 'username_taken') {
            echo "<p style='color: red;'>Username already taken!</p>";
        } elseif ($_GET['pesan'] == 'register_success') {
            echo "<p style='color: green;'>Registration successful! Please log in.</p>";
        }
    }
    ?>
</body>
</html>
