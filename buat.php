<?php 

include 'db.php';
    $nama=$_POST['nama'];
    $nomor=$_POST['nomor'];
    $usia=$_POST['usia'];
    $db->query("INSERT INTO data_diri (nama, no_tlp, usia) VALUES ('$nama', '$nomor', '$usia')");
    header('location: tampil.php');
?>