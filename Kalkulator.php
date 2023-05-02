<?php
    if (isset($_POST['hitung'])) {
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $operasi = $_POST['operasi'];
        switch ($operasi) {
            case 'tambah':
                $hasil = $bil1 + $bil2;
                break;
            case 'kurang':
                $hasil = $bil1 - $bil2;
                break;
            case 'kali':
                $hasil = $bil1 * $bil2;
                break;
            case 'bagi':
                $hasil = $bil1 / $bil2;
                break;
            case 'mod':
                $hasil = $bil1 %= $bil2;
                break;
            case 'akar':
                $hasil = sqrt($bil1);
                break;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <style type="text/css">
        .kalkulator {
            width: 330px;
            background:grey;
            margin: 100px auto;
            padding:10px 20px 40px 20px;
            border-radius:10px;
            box-shadow:0px 10px 20px 0px;
        }

        .kalkulator h2 {
            text-align:center;
            color:white;
        }

        .bil {
            width:300px;
            margin:10px;
            font-size:20px;
            border:none;
            border-radius:10px;
            padding:10px;
            box-shadow:0px 10px 20px 0px;
        }
        
        .opsi {
            width:60px;
            margin:10px;
            font-size:20px;
            border:none;
            border-radius:10px;
            padding:10px;
            background-color:lime;
        }

        .button {
            width:245px;
            background-color:lime;
            font-size:20px;
            border:none;
            border-radius:10px;
            padding:10px 20px;
        }

    </style>
</head>

<body style="font-family:times;">
    <div class="kalkulator">
        <form method="post">
            <h2>Kalkulator Sederhana</h2>
            <input type="text" name="bil1" class="bil" placeholder="Masukkan Bilangan Pertama"/>
            <input type="text" name="bil2" class="bil" placeholder="Masukkan Bilangan Kedua"/>
            <select class="opsi" name="operasi">
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">x</option>
                <option value="bagi">/</option>
                <option value="mod">%</option>
                <option value="akar">#</option>
            </select>
            <button type="submit" name="hitung" class="button">hitung</button>
        </form>
        <?php if (isset($_POST['hitung'])) { ?>
            <input type="text" value="<?php echo $hasil; ?>" class="bil">
        <?php } else { ?>
            <input type="text" value="0" class="bil">
        <?php } ?>
    </div>
</body>
</html>