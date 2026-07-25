<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "monu");

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT id, name, password FROM userstable WHERE email = ?";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if ($user = mysqli_fetch_assoc($result)) {

        if (password_verify($password, $user['password'])) {

            $_SESSION['USER_ID'] = $user['id'];
            $_SESSION['name'] = $user['name'];

            echo "Login Successful";
        } else {
            echo "Invalid Password";
        }

    } else {
        echo "Email not found";
    }
}