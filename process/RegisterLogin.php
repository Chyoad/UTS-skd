<?php

if ($_POST["submit"] == 'Register') {
    register();
} else if ($_POST["submit"] == 'Login') {
    login();
}

function register() {
    
    require '../database/connection.php';
    require 'caesarCipher.php';

    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $username_encrypt = encryptPass($username);
    $password = $_POST['password'];
    $password_md5 = md5($password . $username);
    $isUsed = mysqli_query($koneksi, "SELECT * FROM `user_students` WHERE `username`='$username_encrypt'");
    if (mysqli_num_rows($isUsed) < 1) {
        $data = mysqli_query($koneksi, "INSERT INTO `user_students` (`fullname`,`username`, `password`) VALUES ('$fullname', '$username_encrypt', '$password_md5')");
        if ($data) {
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
    
    require '../database/connection.php';
    require 'caesarCipher.php';

    session_start();

    if (isset($_POST['username']) && isset($_POST['password'])) {
      $username = $_POST['username'];
      $username_encrypt = encryptPass($username);
      $password = $_POST['password'];
      $password_md5 = md5($password . $username);
      $user = mysqli_query($koneksi, "SELECT * FROM user_students WHERE username='$username_encrypt'");

      while ($row = mysqli_fetch_array($user, MYSQLI_BOTH)) {
          $fullname = $row["fullname"];
      }

      if (mysqli_num_rows($user) >= 1) {
          foreach ($user as $data) {
              if ($data['password'] == $password_md5) {
                  $_SESSION['id'] = $id;
                  $_SESSION['namauser'] = $username_encrypt;
                  $_SESSION['fullname'] = $fullname;
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
      } else {
          echo ("<script LANGUAGE='JavaScript'>
              window.alert('Login gagal');
              window.location.href='../login.php';
              </script>");
      }
    }else {
      if ($_SESSION['namauser']) {
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
}

    