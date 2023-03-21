<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Rumus Bangung datar jajar genjang</title>
</head>
<body>
    <h1> Bangun Datar jajar genjang </h1>

    <form method="POST">
        <table>
        <tr>
            <td>alas</td>
            <td>
                <input type="text" name="alas" require>
            </td>
        </tr>
        <tr>
            <td>tinggi</td>
            <td>
                <input type="text" name="tinggi" require>
            </td>
        </tr>
        <tr>
            <td>panjang</td>
            <td>
                <input type="text" name="panjang" require>
            </td>
        </tr>
        <tr>
            <td>lebar</td>
            <td>
                <input type="text" name="lebar" require>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit" value="Hitung">
        </td>
        </tr>
</table>
</form>
<?php 
    if(isset($_POST['submit'])){
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];

        $luas = $alas * $tinggi;
        echo 'Hasil perhitungan Luas jajar genjang';
        echo '<br> Diketahui :';
        echo '<br> alas : '.$alas;
        echo '<br> tinggi : '.$tinggi;

        echo '<br> Maka Luasnya ' .$luas;

        $keliling = 2 * $panjang+ 2 * $lebar;
        echo 'Hasil perhitungan keliling jajar genjang';
        echo '<br> Diketahui :';
        echo '<br> panjang : '.$panjang;
        echo '<br> lebar : '.$lebar;

        echo '<br> Maka kelilingnya ' .$keliling;
    }
?>
</body>
</html>