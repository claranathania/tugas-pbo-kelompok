<?php
include  'database.php';
$rz = new database();
$rz->Connect();
$pegawai = $rz->GetData_All("SELECT * FROM d_pegawai");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<h2>Tugas 1</h2>
<h2>anggota kelompok</h2>
<br>
<p>Clara Nathania</p> 
<p>Indah Nur Hamidah</p> 
<p>M F Rizkieanto M</p> 
<p>Jahir MH</p> 

    <table border="2" align="center" width="100%">
        <thead>
            <tr align = "center">
                <td>Nip</td>
                <td>Nama</td>
                <td>Jenis Kelamin</td>
                <td>tanggal Lahir</td> 
                <td>status</td>   
                <td>mulai kerja</td>            
            </tr>
        </thead>
        
        <?php foreach ($pegawai as $value) {
          ?>
        
        
        <tr>
            
            <td><?= $value['nip']?></td>
            <td><?= $value['nama']?></td>
            <td><?= $value['jns_kel']?></td>
            <td><?= $value['tgl_lahir']?></td>
            <td><?= $value['status']?></td>
            <td><?= $value['mulai_kerja']?></td>
        </tr>

        <?php } ?>
    </table>
</body>
</html>