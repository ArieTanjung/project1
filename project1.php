<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p {
        display: inline;
        }
    </style>
</head>
<body>
<div id="1"> Halo, Dunia!</div>
    <form action="" method="post">
        <p>Deret bilangan ganjil yang habis dibagi 3</p><br><br>
        <p>Nilai awal : </p>
        <input type="text" name="nilai1" id="nilai1"><br><br>
        <p>Nilai akhir : </p>
        <input type="text" name="nilai2" id="nilai2"><br><br>
        <input type="submit" name="submit" id="submit"><br><br>
    </form>
</body>
</html>
    <?php
    if (isset($_POST['submit'])) 
    { 
        $nilai_awal = $_POST['nilai1']; 
        $nilai_akhir = $_POST['nilai2']; 
        $deret = 0;
        $deret_baru =[];
        $jumlah = 0;
        while($deret <= $nilai_akhir)
        {
            $deret = $deret + 3;
            if($deret >= $nilai_awal && $deret%2 != 0)
            {
                $jumlah += 1;
                array_push($deret_baru, $deret);
            }
        }

        echo "Deret angka : ";
        for ($i = 0;$i < $jumlah; $i++)
        {
            echo "$deret_baru[$i] ";
        }
        echo "<br><br>Jumlah angka : $jumlah";
        $jumlah_nilai = array_sum($deret_baru);
        echo "<br><br>Jumlah deret : $jumlah_nilai";
    }
    ?>
    chuaple.php-formatter