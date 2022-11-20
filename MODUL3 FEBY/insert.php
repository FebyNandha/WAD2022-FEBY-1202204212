<?php

    include "connector.php";

    $nama_mobil = $_POST['nama_mobil'];
    $pemilik_mobil = $_POST['pemilik_mobil'];
    $merk_mobil = $_POST['merk_mobil'];
    $tanggal_beli = $_POST['tanggal_beli'];
    $deskripsi = $_POST['deskripsi'];
    $foto_mobil = $_FILES['foto_mobil']['car'];
    $status_pembayaran = $_POST['status_pembayaran'];

    $query = mysqli_query($conn, "INSERT INTO showroom_feby_table(nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) 
    VALUES ('$nama_mobil', '$pemilik_mobil', '$merk_mobil', '$tanggal_beli', '$deskripsi', '$foto_mobil', '$status_pembayaran')");

    if($query){
        echo "<script>alert('Data telah ditambahkan')</script>";
        echo "<meta http-equiv='refresh' contents='1 url=Add-Feby.php'>";
    } else {
        echo "<script>alert('Data gagal ditambahkan')</script>";
        echo "<meta http-equiv='refresh' contents='1 url=Add-Feby.php'>";
    }?>