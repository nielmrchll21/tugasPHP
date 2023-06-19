<?php
$ar_prodi = ['SI' => 'Sistem Informasi', 'TI' => 'Teknik Informatika', 'ILKOM' => 'Ilmu Komunikasi', 'TE' => 'Teknik Elektro'];
$ar_skill = ['HTML' => 10, 'CSS' => 10, 'Javascript' => 20, 'RWD Bootstrap' => 20, 'PHP' => 30, 'MYSQL' => 30, 'Laravel' => 40];
$domisili = ['Jakarta', 'Bandung', 'Surabaya', 'Bekasi', 'Malang', 'Lainnya'];

?>

<fieldset style="background-color:E4DCCF; width: 50%; right: 80px; position:absolute; top: 70px; left: 25%;">
    <legend align='center'><h3>Form Registrasi Kelompok Belajar</h3></legend>
    <table >
        <thead>
            <tr>
                <th>Form Registrasi</th>
            </tr>
        </thead>
        <tbody>
            <form method = "POST">
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td><input type='text' name='nim'></td>
                </tr>
                <tr>
                    <td>Nama  </td>
                    <td>:</td>
                    <td><input type='text' name='nama'></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin </td>
                    <td>:</td>
                    <td><input type='radio' name='jk' value='Laki-laki'>Laki-laki &nbsp;
                    <input type='radio' name='jk' value='Perempuan'>Perempuan 
                </td>
                </tr>
                <tr>
                    <td>Program Studi </td>
                    <td>:</td>
                    <td>
                        <select name="prodi">
                            <?php

                            foreach($ar_prodi as $prodi => $v){
                            ?>
                            <option value=' <?= $prodi ?>' > <?= $v ?> </option>
                            <?php }?>
                            
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Skill Programming </td>
                    <td>:</td>
                    <td>
                        <?php
                        foreach($ar_skill as $skill => $s){
                        ?>
                        <input type='checkbox' name='skill[]' value="<?= $skill ?>"> <?= $skill ?>
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td>Domisili </td>
                    <td>:</td>
                    <td>
                        <select name="domisili">
                            <?php

                            foreach($domisili as $d){
                            ?>
                            <option value=' <?= $d ?>' > <?= $d ?> </option>
                            <?php } ?>
                            
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type='email' name='email'></td>
                </tr>
               
        </tbody>
        <tfoot>
            <tr>
                <th colspan="2">
                    <button name='proses' >Submit</button>
                </th>
            </tr>
        </tfoot>
        </form>
    </table>
</fieldset>


<fieldset style="background-color:E4DCCF; width: 50%; right: 80px; position:absolute; top: 360px; left: 25%;">
<?php

error_reporting(0);

if(isset($_POST['proses'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $prodi = $_POST['prodi'];
    $skill = $_POST['skill'];
    $domisili = $_POST['domisili'];
    $email = $_POST['email'];


    $skor = 0;
    foreach($skill as $sk){
        if (isset($ar_skill[$sk])){
            $skor += $ar_skill[$sk];
        }
    }
}

  
function skor_skill($skor){
    if($skor >= 100 && $skor <= 150){
        return "Sangat Baik";
    }else if ($skor >= 60 && $skor <= 100){
        return "Baik";
    }else if ($skor >= 40 && $skor <= 60){
        return "Cukup";
    }else if ($skor >= 0 && $skor <= 40){
        return "Kurang";
    }else{
        return "Nilai Tidak Memadai";
    }
}

?>
<br><br>

    <table>
        <tbody>
                <form>
                    <tr>
                        <td>NIM</td>
                        <td>:</td>
                        <td><?= $nim ?></td>
                    </tr>
                    <tr>
                        <td>Nama  </td>
                        <td>:</td>
                        <td><?= $nama ?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin </td>
                        <td>:</td>
                        <td><?= $jk ?></td>
                    </tr>
                    <tr>
                        <td>Program Studi </td>
                        <td>:</td>
                        <td><?= $prodi ?></td>
                    </tr>
                    <tr>
                        <td>Skill Programming </td>
                        <td>:</td>
                        <td>
                        <?php
                            foreach($skill as $s){ ?>
                            <?= $s ?>,
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Skor Skill </td>
                        <td>:</td>
                        <td><?= $skor ?></td>
                    </tr>
                    <tr>
                        <td>Kategori Skill </td>
                        <td>:</td>
                        <td><?= skor_skill($skor) ?></td>
                    </tr>
                    <tr>
                        <td>Domisili </td>
                        <td>:</td>
                        <td><?= $domisili ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><?= $email ?></td>
                </tr>
        </tbody>
    </table>
</fieldset>