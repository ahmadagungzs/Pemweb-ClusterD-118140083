<?php
    include "connection.php";

    $nim    = $_POST['nim'];
    $nama   = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $id_jur = $_POST['id_jur']

    $insert = mysqli_query($connect, "INSERT INTO mahasiswa VALUES ('$nim','$nama','$alamat','$id_jur')");

    if($insert){
        header('location:mainmenu.php?tambahMHS=1');
    } else {
        echo "ERROR sql : ";
        echo $insert;
        return false;
    }