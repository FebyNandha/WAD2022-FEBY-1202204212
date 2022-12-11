<?php 
include ('connector.php');
            if(isset($_POST["update"])){

                $id_mobil =$_POST['id_mobil'];
                $nama_mobil = $_POST['nama_mobil'];
                $pemilik_mobil = $_POST['pemilik_mobil'];
                $merk_mobil = $_POST['merk_mobil'];
                $tanggal_beli = $_POST['tanggal_beli'];
                $deskripsi = $_POST['deskripsi'];
                $status_pembayaran = $_POST['status_pembayaran'];


                $update = mysqli_query($conn, "UPDATE showroom_feby_table SET nama_mobil='$nama_mobil',pemilik_mobil='$pemilik_mobil',merk_mobil='$merk_mobil',tanggal_beli='$tanggal_beli', deskripsi='$deskripsi' ,status_pembayaran='$status_pembayaran'WHERE id_mobil='$id_mobil'");

                echo "<script>alert('Data berhasil diupdate')</script>";
                echo "<meta http-equiv = 'refresh' content ='1 url =ListCar_Feby.php'>";
        }
?>