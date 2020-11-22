<!DOCTYPE html>
<html>
    <head>
        <title>Tugas 1 - Faktorial</title>
    </head>
    <body>
        <form method="POST">
            <label for="input">Masukkan Bilangan: </label>
            <input type="number" name="faktorial" required><br>
            <button type="submit" name="hitung">Hitung Faktorial</button>
        </form><br>
    </body>
</html>

<?php
    function faktorial($x){
        if($x==1){
            return 1;
        } else {
            return $x * faktorial($x-1);
        }
    }
    if(isset($_POST['hitung'])){
        $x = $_POST['faktorial'];
        echo 'Hasilnya adalah '.faktorial($x);
    }
?>
