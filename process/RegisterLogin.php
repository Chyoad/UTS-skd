<?php

if ($_POST["submit"] == 'Register') {
    register();
} else if ($_POST["submit"] == 'Login') {
    login();
}

function register() {
    
    require '../database/connection.php';
    require 'caesarCipher.php';

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $email_encrypt = encryptPassword($email);
    $password = $_POST["password"];
    $password_md5 = md5($password . $lastname);
    $isUsed = mysqli_query($koneksi, "SELECT * FROM `users` WHERE `email`='$email_encrypt'");

    if (mysqli_num_rows($isUsed)<1)
    {
      $data = mysqli_query($koneksi, "INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`) VALUES ('$firstname', '$lastname', '$email_encrypt', '$password_md5')");
      if($data){
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Registrasi berhasil');
        window.location.href='../login.php';
        </script>");
      } else {
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Registrasi gagal');
        window.location.href='../register.php';
        </script>");
      }
    } else {
      echo ("<script LANGUAGE='JavaScript'>
        window.alert('Registrasi gagal');
        window.location.href='../register.php';
        </script>");
    }
}

function login() {
    
    include '../database/db.php';
    include 'caesarCipher.php';

    $username = $_POST["username"];
    $password = $_POST["password"];
    $password_salt = $password . $username;
    $password_enc = encryptPassword($password_salt);
    
    $query = "SELECT `id`, `username`, `password` FROM `student_nominee` WHERE `username` = '$username' AND `password` = '$password_enc' LIMIT 1";
    $data = mysqli_query($conn, $query);

    if ($data->num_rows > 0) {
        $result = mysqli_fetch_assoc($data);
        session_start();
        $_SESSION["id"] = $result['id'];
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Login berhasil');
        window.location.href='../dashboard.php';
        </script>");
    } else {
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Login gagal');
        window.location.href='../login.php';
        </script>");
    }

}