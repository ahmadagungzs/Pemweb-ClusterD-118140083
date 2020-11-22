<?php
    include "connection.php";
    $nim = $_GET['nimdel'];
    $data_delete = mysqli_query($connect, "DELETE FROM mahasiswa WHERE nim='$nim';");
    if (mysqli_affected_rows($connect)){
        echo "Berhasil dihapus dari database!";
        header("location:mainmenu.php?delete=1");
    } else {
        echo "Gagal dihapus dari database!";
    }