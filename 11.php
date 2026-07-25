<?php
session_start();
$conn  = mysqli_connect('localhost','root','password','userdatabase');

if($_SERVER['REQUEST_METHOD']  == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT id ,name, password FROM usertable where email=?";
    $stmt = mysqli_prepare($conn,$sql);
    mysqli_stmt_bind_param($stmt,'s',$email);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    if($user = mysqli_fetch_assoc($result)){
        if(password_verify($password,$user['password'])){
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['name'] = $user['name'];

            echo "Login Success full";
        }else{
            echo "Wrong Password";
        }
    }else{
        echo "EMail not matcing";
    }
}