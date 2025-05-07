<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view data mahasiswa</title>
</head>
<body>

    <h3>data mahasiswa</3>
    <a href="insertdata.php">tambah</a>

    <table>
        <thead>
            <tr>
             <th>no</th>
             <th>nim</th>
             <th>nama</th>
             <th></th>
          </tr>
</thead>

 <tbody>
<?php
$sql = "SELECT nim,nama FROM mhs;";
include_once("konfigurasi.php");
$res = mysqli_query($koneksi,$sql);
while($row = mysqli_fetch_array($res)){
    $no++;
}
?>

            <tr>
                <td>1</td>
                <td>6677665</td>
                <td>yulianisasi</td>
                <td>ubah hapus</td>
    
</body>
</html>