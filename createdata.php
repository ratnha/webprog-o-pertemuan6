<?php
    include_once("konfigurasi.php");
    if(!isset($_POST["simpanandata"])){
        die();
    }

$txnim = $_POST["nim"];
$txnama = $_POST["nama"];
$txalamat = $_POST["alamat"];
$txtgl = $_POST["tgllahir"];
$txjk = $_POST["jk"];

  $sql = "INSERT INTO mhs(nim,nama,alamat,tgl_lahir,jeniskel)
  VALUES('$txnim',$txnama','$txalamat,'$txjk,'$txtgl,');"

  $res = mysqli_Query($koneksi,$sql);
  if(!$res){
    die("penambahan data gagal");
  }

  echo "penambahan data sukses";

  mysqli_close($koneksi);