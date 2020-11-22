<!DOCTYPE html>
<html>
<head>
    <title>Tugas 2 - Menghitung Panjang Karakter</title>
</head>
<body>
    <form action="" method="GET">
        <label for="nama">Masukkan Nama Anda: </label>
        <input type="text" id="nama" name="nama" required><br><br>
        <label for="warna">Masukkan warna font: </label>
        <input type="text" id="warna" name="warna" placeholder="kuning, ungu, biru"><br><br>
        <button type="submit" name="input">Subumit</button>
    </form>
    <br>
    <?php
        function show($name, $color){
            $count=strlen($name);
            $sum=0;
            
            if($count>=1 && $count<=10){
                for($i=1;$i<=count;$i++){
                    $sum=$sum+300;
                }
                if ($color=="kuning" || $color=="Kuning"){
                    echo "<font style='color: yellow;'>Nama $name <br> Harga total: $sum <br></font>";
                } else if ($color=="ungu" || $color=="Ungu"){
                    echo "<font style='color: violet;'>Nama $name <br> Harga total: $sum <br></font>";
                } else if ($color=="biru" || $color=="Biru"){
                    echo "<font style='color: blue;'>Nama $name <br> Harga total: $sum <br></font>";
                } else if($color==""){
                    echo "<font style='color: red;'>Nama $name <br> Harga total: $sum <br></font>";
                } else {
                    echo "Maaf, warna yang Anda pilih tidak tesedia.";
                }
            } else if ($count>=11 && $count<=20){
                for($i=1;$i<=count;$i++){
                    $sum=$sum+500;
                }
                if ($color=="kuning" || $color=="Kuning"){
                    echo "<font style='color: yellow;'>Nama $name <br> Harga total: $sum <br></font>";
                } else if ($color=="ungu" || $color=="Ungu"){
                    echo "<font style='color: violet;'>Nama $name <br> Harga total: $sum <br></font>";
                } else if ($color=="biru" || $color=="Biru"){
                    echo "<font style='color: blue;'>Nama $name <br> Harga total: $sum <br></font>";
                } else if($color==""){
                    echo "<font style='color: red;'>Nama $name <br> Harga total: $sum <br></font>";
                } else {
                    echo "Maaf, warna yang Anda pilih tidak tesedia.";
                }
            } else if ($count>20){
                for($i=1;$i<=count;$i++){
                    $sum=$sum+700;
                }
                if ($color=="kuning" || $color=="Kuning"){
                    echo "<font style='color: yellow;'>Nama $name <br> Harga total: $sum <br></font>";
                } else if ($color=="ungu" || $color=="Ungu"){
                    echo "<font style='color: violet;'>Nama $name <br> Harga total: $sum <br></font>";
                } else if ($color=="biru" || $color=="Biru"){
                    echo "<font style='color: blue;'>Nama $name <br> Harga total: $sum <br></font>";
                } else if($color==""){
                    echo "<font style='color: red;'>Nama $name <br> Harga total: $sum <br></font>";
                } else {
                    echo "Maaf, warna yang Anda pilih tidak tesedia.";
                }
            }
        }

        if (isset($_GET["input"])){
            show($_GET["name"], $_GET["color"]);
        }
    ?>
</body>
</html>