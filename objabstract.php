<br>
<center>
<table border=1 cellpadding=10>
    <thead>
        <h2><i>~~~Menghitung Bangun Datar~~~</i></h2>
        <hr>
    </thead><br>
    <tbody>
    <?php
        require_once 'Lingkaran.php';
        require_once 'persegiPanjang.php';
        require_once 'segitiga.php';

        $l1 = new Lingkaran(16);
        $p1 = new persegiPanjang (50,24);
        $s1 = new Segitiga(8,4,4);

        $ar_data = [$l1, $p1, $s1];

        foreach ($ar_data as $data){
           ?> <tr>
                <td colspan=2 width=25% align='center' bgcolor=159895 > 
                    <b><i><?= $data->namaBidang(). '<br>'?></i></b>
                </td>
              </tr>
              <tr align='center' bgcolor=FEFAE0>
                <td>Luas</td>
                <td><?= $data->LuasBidang() ?> </td>
              </tr>
              <tr align='center' bgcolor=FEFAE0>
                <td>Keliling</td>
                <td><?= $data->kelilingBidang() ?> </td>
              </tr>
        <?php
        } ?>

    </tbody>
</table>
</center>