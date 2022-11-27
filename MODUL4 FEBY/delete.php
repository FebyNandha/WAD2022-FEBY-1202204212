<?php
    include('connector.php');
    $id_mobil = $_POST['id_mobil'];
    $query = "DELETE FROM showroom_feby_table WHERE id_mobil = $id_mobil";
    $delete = mysqli_query($conn, $query);
    
    echo "<script>alert('Data berhasil dihapus')</script>";
    echo "<meta http-equiv = 'refresh' content ='1 url =Listcar_Feby.php'>";
?>