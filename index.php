<?php
    include 'Proses.php';
    if (isset($_POST['kirim'])){
        $sewa = new Rental();
        $sewa->setharga(70000, 120000, 100000, 80000);
        $sewa->jenis = ($_POST['jenis']);
        $sewa->lama = ($_POST['lama']);
        $sewa->nama = ($_POST['nama']);
        echo $sewa->bill();
    }
?>

<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <center>
        <form action="" method ="POST" >
            <td>
                <label>Masukan Nama: </label>
                <input type="text" name="nama" id="nama" require><br><br>
                <label>Berapa Lama Waktu Rental: </label>
                <input type="number" name="lama" id="lama" require><br><br>
                <select name="jenis" id="jenis">
                    <option value="honda">Honda</option>
                    <option value="ninja">Ninja</option>
                    <option value="aerox">aerox</option>
                    <option value="kawasaki">Kawasaki</option>
                </select>
                <br><br>
                <input type="submit" name="kirim" id="kirim">
            </td>
        </form>
    </center>
</body>
</html>