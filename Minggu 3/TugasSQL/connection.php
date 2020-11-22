<!DOCTYPE html>
<html>
    <head>
        <title>Koneksi Database MySQLi</title>
    </head>
    <body>
        <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "praktikumpemweb";
        $connect = mysqli_connect($host,$user,$pass);
        $select = mysqli_select_db($db,$connect);
        if($select){
            echo "berhasil terhubung ke database";
        } else {
            echo "gagal terhubung ke database";
        }
        ?>
    </body>
</html>