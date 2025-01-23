<?php
$hash = '$2y$10$UFtfE9K5/YYGmTNP14ValOzelRfT/WJRljy1xBUjUPgKwI49iG5Y6';
$input_password = 'jewepe123';

if (password_verify($input_password, $hash)) {
    echo 'Password cocok!';
} else {
    echo 'Password tidak cocok.';
}
?>
