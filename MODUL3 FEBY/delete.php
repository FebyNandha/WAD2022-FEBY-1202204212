<?php
    include('connector.php');
    $id = $_GET['id_mobil'];
    $query = "DELETE FROM showroom_feby_table WHERE id_mobil = $id";
    $delete = mysqli_query($conn, $query);
    
    echo "<script>alert('Data berhasil dihapus')</script>";
    echo "<meta http-equiv = 'refresh' content ='1 url =Listcar-Feby.php'>";
?>