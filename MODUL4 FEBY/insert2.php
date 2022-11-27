<?php

    include('connector.php');

    $nama = $_POST['nama'];
    $email = $_POST['emailAdd'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    $no_hp = $_POST['no_hp'];

    $query = mysqli_query($conn, "INSERT INTO user_feby (nama, emailAdd, cpassword, no_hp) VALUES ('$nama', '$email', '$cpassword', '$no_hp')");

    if($query){
         echo "<script>alert('Data berhasil ditambahkan')</script>";
         echo "<meta http-equiv='refresh' content='1 url=HomeAfter.php'>";
     } else {
         echo "<script>alert('Data gagal ditambahkan')</script>";
         echo "<meta http-equiv='refresh' content='1 url=Register.php'>"; 
     }
?>