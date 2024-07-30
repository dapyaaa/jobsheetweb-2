<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    //Informasi diri
    $nis = "2233244";
    $nama = "Alfian Davi Aghna";
    $alamat = "Bangetayu Kulon RT 1 RW 2";
    $telepon = "0895808400804";
    $email ="alfiandavi48@gmail.com";

    echo"<h3>Informasi diri<h3>";
    echo"Nis : $nis <br>";
    echo"Nama : $nama <br>";
    echo"Alamat : $alamat <br>";
    echo"Telepon : $telepon <br>";
    echo"Email : $email <br> <br>";

    //Informasi Nilai
    echo"<h3>Informasi Nilai<h3><br>";
    ?>

    <form action="hitung.php" method="GET">
        Nilai Tugas: <input type="text" name="tugas"> <br>
        Nilai UTS  : <input type="text" name="uts"> <br>
        Nilai UAS  : <input type="text" name="uas"> <br>
        <input type="submit">
    </form>

    <?php
    $nilaitugas = $_GET["tugas"];
    $nilaiuts = $_GET["uts"];
    $nilaiuas = $_GET["uas"];

    $nilaiakhir = ($nilaitugas * 0.20) + ($nilaiuts * 0.35) + ($nilaiuas * 0.45);

    $grade = '';
    if ($nilaiakhir >= 85) {
        $grade = 'A';
    }elseif ($nilaiakhir <=85 ) {
        $grade = 'B';
    }elseif ($nilaiakhir <= 68) {
        $grade = 'C';
    }elseif ($nilaiakhir <=58){
        $grade = 'D';
    }elseif ($nilaiakhir <= 40){
        $grade = 'E';
    }

    echo"<br>";
    echo"<br>";
    echo"Nis : $nis <br>";
    echo"Nama : $nama <br>";
    echo"Nilai Tugas : $nilaitugas <br>";
    echo"Nilai UTS : $nilaiuts <br>";
    echo"Nilai UAS : $nilaiuas <br>";
    echo"Nilai Akhir : $nilaiakhir <br>";
    echo"Nilai Huruf : $grade <br>";
    ?>

</body>
</html>